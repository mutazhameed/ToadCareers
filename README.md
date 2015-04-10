# ToadCareers

Careers/Recruitment management system written in PHP with Laravel 4 MVC and Bootstrap. Where job seekers can create full profile and view current open jobs, apply for it, and view their application status for each job.

Administrator/recreutor can add/edit jobs, view applicants for each job, filter and search for key words, view applicant system generated profile or download uploaded resume. Change their application status in one click.

System email notify applicants for new job post in a specific job category where they already subscribed to, and for their applicantion status change.

###Toadcareers includes
  - Login and registration
  - Job seeker dashboard of
    - Personal information
    - Education
    - Experience
    - Achievments
    - Courses
    - certifications
    - skills
    - languages
  - Administrator/recreutor panel
    - post new job
    - filter and search applicant for job
    - change applicant status

####Requirements
Apache, Nginx, or Microsoft IIS
PHP 5.4 or higher
MySQL 5.6 or higher, for im using Full-text index in search module.

####Installation
create the database and configure it in `app/config/database.php`
In Artisan run
```sh
Php artisan migrate
```
Then
```sh
Php artisan db:seed
```
Or import `\ToadCareers.sql` file.

After database creating and seeding there will be two default users:

Admin user: `admin@localhost.com` with password: `demo`.

Job seeker account login: `user@demo.com` with password: `demo`.

###Email configuration
Navigate to `app/config/mail.php`

To customize email template; navigate to `app/view/emails`

License
----

MIT


**Free Software, Hell Yeah!**
