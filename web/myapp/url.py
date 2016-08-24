from django.conf.urls import url

from django.contrib import admin

import views

admin.autodiscover()

urlpatterns = [
   # Examples:
   # url(r'^$', 'myproject.views.home', name = 'home'),
   # url(r'^blog/', include('blog.urls')),

   #url(r'^', views.check),
   url(r'^$', views.index),
   url(r'^check/$', views.check),
   url(r'^CTA1/$', views.CTA1),
   url(r'^FOF1/$', views.FOF1),
   url(r'^more/$', views.more),
   #url(r'^page_services/$', views.services),
   #url(r'^(?P<data>)/$', views.stamp, name='stamp'),
   url(r'^', views.other),
   #url(r'^', views.check),
   #url(r'^search/', views.index),
   #url(r'^.*html$',views.other)
]