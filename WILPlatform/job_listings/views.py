from django.shortcuts import render
from .models import JobListing

# Create your views here.
def job_list(request):
    job_listings = JobListing.objects.all()
    return render(request, 'job_listings/job_list.html', {'job_listings': job_listings})