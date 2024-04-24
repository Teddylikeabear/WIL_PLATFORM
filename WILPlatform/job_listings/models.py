from django.db import models

# Create your models here.
class JobListing(models.Model):
    title = models.CharField(max_length=100)
    description = models.TextField()
    requirements = models.TextField()
    # Add more fields as needed