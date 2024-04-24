from django.contrib.auth.models import User
from django.db import models

# Create your models here.

class EmployerProfile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    company_name = models.CharField(max_length=100)
    industry = models.CharField(max_length=100)
    contact_info = models.CharField(max_length=100)
    # Add more fields as needed