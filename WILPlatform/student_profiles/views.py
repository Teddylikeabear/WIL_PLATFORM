from django.shortcuts import render
from .models import StudentProfile

# Create your views here.
def view_profile(request):
    profile = StudentProfile.objects.get(user=request.user)
    return render(request, 'student_profiles/view_profile.html', {'profile': profile})