from django.contrib.auth.models import User
from django.db import models

# Create your models here.

class StudentProfile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    education = models.CharField(max_length=100)
    skills = models.TextField()
    # Add more fields as needed