"""web URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.10/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.conf.urls import url, include
    2. Add a URL to urlpatterns:  url(r'^blog/', include('blog.urls'))
"""
import myapp
from myapp import url
import views
from django.conf.urls import include,url

from django.contrib import admin
admin.autodiscover()

urlpatterns = [
   # Examples:
   # url(r'^$', 'myproject.views.home', name = 'home'),
   # url(r'^blog/', include('blog.urls')),

    url(r'^.*html$', include(myapp.url)),
    url(r'^', include(myapp.url)),
    #url(r'^files/(?P<path>.*)$', 'django.views.static.serve',{'document_root': 'D:\share\repute-multipurpose-theme-v1.3\web\myapp\templates\assets'}),
    #url(r'^$', views.index),
    #url(r'^.*$',include(myapp.url))

]