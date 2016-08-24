from datetime import datetime, timedelta
from django.conf import settings
from django.contrib import auth


class AutoLogout:
  def process_request(self, request):
    if not request.user.is_authenticated() :
      #Can't log out if not logged in
      return

    try:
      if datetime.now() - request.session['login'] > timedelta( 0, settings.AUTO_LOGOUT_DELAY * 60*60*24, 0):
        auth.logout(request)
        del request.session['login']
        return
    except KeyError:
      pass

    request.session['login'] = datetime.now()