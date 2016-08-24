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

jsapi_ticket = ''
expire_time = 7201
timenow = 0
data = {}

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
            elif(request.get_full_path() == '/page-detail.html'):
                if 'CTA1' in request.session:
                    return render(request,'page-detail.html')
                elif 'FOF1' in request.session:
                    return render(request,'page-detail.html')
                elif 'more' in request.session:
                    return render(request,'page-detail.html')
                else:
                    return redirect('/')
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

def CTA1(request):
    password = request.POST['pwd']
    #print password
    t = dict()
    if(password == 'mingxi'):
        request.session['CTA1'] = True
        msg = 'yes'
    else:
        msg = 'no'
    print msg
    return HttpResponse(msg)
    
def FOF1(request):
    password = request.POST['pwd']
    #print password
    t = dict()
    if(password == 'mingxi'):
        request.session['FOF1'] = True
        msg = 'yes'
    else:
        msg = 'no'
    print msg
    return HttpResponse(msg)
    
def more(request):
    password = request.POST['pwd']
    #print password
    t = dict()
    if(password == 'mingxi'):
        request.session['more'] = True
        msg = 'yes'
    else:
        msg = 'no'
    print msg
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
    

