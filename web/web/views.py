from django.shortcuts import render,redirect
from django.http import HttpResponse

# Create your views here.
def index(request):
    return render(request,"index.html")
   
def other(request):
    if request.method == 'POST':
        msg = UserForm(request.POST)
        if msg.is_valid():
            regist = msg.cleaned_data['agreed']
            request.session['login'] = regist
    return render(request,"index.html")
    #return url(r'^index',include(main))
    
def main(request):
    pass   