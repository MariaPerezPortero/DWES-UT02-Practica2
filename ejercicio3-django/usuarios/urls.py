

from django.urls import path
from . import views

# URL para asociar la lista de usuarios
urlpatterns = [
    
    path('', views.lista_usuarios, name='lista_usuarios'),
]