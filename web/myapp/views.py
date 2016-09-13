from django.shortcuts import render,redirect,render_to_response
from django.conf import settings
from django.core.urlresolvers import reverse
from django.template import Context, loader
from django.http import HttpResponse,HttpRequest,HttpResponseRedirect
from django.views.decorators.csrf import csrf_protect,csrf_exempt
from django.template import RequestContext
import time
from random import Random
import urllib2,json
import hashlib
import sqlite3

jsapi_ticket = ''
expire_time = 7201
timenow = 0
data = {}
conn = sqlite3.connect('mingxi.db')

# Create your views here.
def index(request):
    global data,expire_time,timenow
    if(expire_time > 7200):
        stamp()
    expire_time = time.time() - timenow
    #return HttpResponse(request.get_full_path())
    if 'mingxi' in request.POST:
        request.session['login'] = time.time()
        template = loader.get_template('index.html')
        context = Context({
            'timestamp':data['timestamp'],
            'nonceStr':data['nonceStr'],
            'signature':data['signature'],
        })
        return HttpResponse(template.render(context))
    else:
        #print request.session.get_expiry_age()
        #request.session.get('login', False)
        if 'login' in request.session:
            if(request.get_full_path() == '/'):
                #return HttpResponse(request.get_full_path())
                template = loader.get_template('index.html')
                context = Context({
                    'timestamp':data['timestamp'],
                    'nonceStr':data['nonceStr'],
                    'signature':data['signature'],
                })
                return HttpResponse(template.render(context))
            elif(request.get_full_path() == '/page-services.html'):
                if 'user' in request.session:
                    return render(request,'page-services.html')
                else:
                    return redirect('/signin.html')
            elif(request.get_full_path() == '/page-support.html'):
                if 'user' in request.session:
                    return render(request,'page-support.html')
                else:
                    return redirect('/signin.html')
            elif(request.get_full_path() == '/page-terms.html'):
                if 'user' in request.session:
                    return render(request,'page-terms.html')
                else:
                    return redirect('/signin.html')
            else:
                path = request.get_full_path()
                if(path.find('?') != -1 or path.find('#') != -1):
                    template = loader.get_template('index.html')
                    context = Context({
                        'timestamp':data['timestamp'],
                        'nonceStr':data['nonceStr'],
                        'signature':data['signature'],
                    })
                    return HttpResponse(template.render(context))
                    #return render(request,"index.html",{'data':data})
                else:
                    path = path.split('/')
                    return render(request,path[1])
        else:
            return redirect('/check/')
        #return HttpResponse(request.get_full_path())
    
    
def check(request):
    return render(request,"check.html")
    
def other(request):
    return redirect('/')
    
def getlogin(request):
    if 'user' in request.session:
        name = request.session['user']
    else:
        name = 'error'
    return HttpResponse(name)
        
def signin(request):
    global conn
    c = conn.cursor()
    pwd = request.POST['pwd']
    name = request.POST['name']
    state = "select * from user where name='%s' and password='%s' " % (name,pwd)
    c.execute(state)
    result = c.fetchall()
    print result
    if(len(result) == 0):
        msg = 'no'
    else:
        msg = 'yes'
        request.session['user'] = name
        request.session.modified = True
    print msg
    state2 = "select * from info where name='%s' " % (name)
    c.execute(state2)
    result = c.fetchall()
    print result
    return HttpResponse(msg)
    
def signup(request):
    global conn
    c = conn.cursor()
    pwd = request.POST['pwd']
    name = request.POST['username']
    email = request.POST['email']
    graduation = request.POST['graduation']
    occupation = request.POST['occupation']
    income = request.POST['income']
    finance = request.POST['finance']
    knowledge = request.POST['knowledge']
    investExperience = request.POST['investExperience']
    investExperienceYears = request.POST['investExperienceYears']
    investTerm = request.POST['investTerm']
    investPurpose = request.POST['investPurpose']
    investAttitude = request.POST['investAttitude']
    investDistribution = request.POST['investDistribution']
    tolerableLoss = request.POST['tolerableLoss']
    state = "select * from user where name='%s' " % (name)
    c.execute(state)
    result = c.fetchall()
    if(len(result) == 0):
        state2 = "insert into user(name,password,email) values ('%s','%s','%s')" % (name,pwd,email)
        c.execute(state2)
        state3 = "insert into info(name,graduation,occupation,income,finance,knowledge,investExperience,investExperienceYears,investTerm,investPurpose,investAttitude,investDistribution,tolerableLoss) values ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')" % (name,graduation,occupation,income,finance,knowledge,investExperience,investExperienceYears,investTerm,investPurpose,investAttitude,investDistribution,tolerableLoss)
        c.execute(state3)
        msg = 'yes'
    else:
        msg = 'no'
    return HttpResponse(msg)

def logout(request):
    del request.session['user']
    request.session.modified = True
    msg = 'yes'
    return HttpResponse(msg)
    
    
def stamp():
    global data,timenow,jsapi_ticket
    print 'call signature:'
    timestamp = '1472006335'
    #randomlength = 16
    noncestr = 'WDEor8mvoYp0QaGc'
    #chars = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789'
    #length = len(chars) - 1
    #random = Random()
    #for i in range(randomlength):
    #    noncestr+=chars[random.randint(0, length)]
    url = 'http://www.mingxifund.com'
    
    request_url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx0810ed2afb188559&secret=c12eae538baad6da7a9c9dee1722bc0e'
    result = json.loads(urllib2.urlopen(request_url).read())
    #print result
    access_token = result['access_token']
    request_url2 = 'https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token='+access_token+'&type=jsapi'
    result2 = json.loads(urllib2.urlopen(request_url2).read())
    #print result2
    jsapi_ticket = result2['ticket']
    
    timenow = time.time()
    
    AppID = 'wx0810ed2afb188559'
    AppSecret = 'c12eae538baad6da7a9c9dee1722bc0e'
    string = 'jsapi_ticket='+jsapi_ticket+'&noncestr='+noncestr+'&timestamp='+timestamp+'&url=http://www.mingxifund.com/'
    signature = hashlib.sha1(string).hexdigest()
    #print string
    #print signature
    data = {'timestamp':timestamp,'nonceStr':noncestr,'signature':signature}

def services(request):
    if request.method == 'POST':
        password = request.POST['pwd']
        if(password == 'mingxi'):
            template = loader.get_template('page-services.html')
            context = Context({
                'result':True
            })
            return HttpResponse(template.render(context))
    else:
        template = loader.get_template('page-services.html')
        context = Context({
            'result':False
        })
        return HttpResponse(template.render(context))
        #print data
        #if msg.is_valid():
        #    regist = msg.cleaned_data['agreed']
        #    request.session['login'] = regist
    #return render(request,"index1.html")
    #return url(r'^index',include(main))
    
#if __name__ == "__main__":
#    stamp()
    

