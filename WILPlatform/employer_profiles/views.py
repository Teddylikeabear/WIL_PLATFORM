from django.shortcuts import render
from .models import EmployerProfile

# Create your views here.
def view_profile(request):
    profile = EmployerProfile.objects.get(user=request.user)
    return render(request, 'employer_profiles/view_profile.html', {'profile': profile})