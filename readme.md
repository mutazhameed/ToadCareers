### ToadCareers
Careers management system written in PHP with Laravel MVC and Bootstrap. Where job seekers can create full profile and view current open jobs, apply for it, and view their application status for each job.


Administrator/recreutor can add/edit jobs, view applicants for each job, filter and search for key words, view applicant system generated profile or download uploaded resume. Change their application status in one click.


System notify applicant in email of new job post in specific job category where they already subscribed to it and for their applicant status change.


####ToadCareers includes:

*Login and registration

*Job seeker dashboard of:

**Personal information

**Education

**Experience

**Achievments

**Courses

**certifications

**skills

**languages

*Administrator/recreutor panel

**post new job

**filter and search applicant for job
**change applicant status
####Installation
create the database and configure it in `app/config/database.php`
In Artisan run
`Php artisan migrate`
Then
`Php artisan db:seed`

Or import ToadCareers.sql file.
After database creating and seeding there will be two default users:
Admin user: `admin@localhost.com` with password: `demo`
Job seeker account login: `user@demo.com` with password: `demo`
Email configuration
Navigate to `app/config/mail.php`
To customize email template; navigate to `app/view/emails`
