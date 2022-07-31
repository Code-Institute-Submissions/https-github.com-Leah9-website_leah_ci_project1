# Leah Portfolio Website
## Code Institute Milestone Project 1

## UX

## Project Goal
The primary goad is to create a website to display my abilities and strengths to a prospective employer.

### User goals
* To find out what skills I have
* What are my qualifications
* Examples of my work
* Am I suitable for a post they need to fill
* Make contact with me
### Required sections
* Home page containing brief overview and what area of emploment I am looking for.
* Projects page containing details of projects that I have completed.
* Contact page to send a message and make contact with me. 


## User stories

## Design choices

## Wireframe
I have created wireframe views of the three pages that the site will have.

### Home page

##### Mobile
![Home page mobile](assets/images/wireframe-mobile-home-sm.png "Mobile")
---
##### Tablet
![Home page Tablet](/assets/images/wireframe-tablet-home-sm.png "Tablet")
---
##### Laptop
![Home page Laptop](/assets/images/wireframe-laptop-home-sm.png "Laptop")

### Projects Page

##### Mobile
![Projects page](/assets/images/wireframe-mobile-projects-sm.png "Mobile")
---
##### Tablet
![Projects page](/assets/images/wireframe-tablet-projects-sm.png "Tablet")
---
##### laptop
![Projects page](/assets/images/wireframe-laptop-projects-sm.png "Laptop")
---

### Contact Page

##### Mobile
![Contact page](/assets/images/wireframe-mobile-contact-sm.png "Mobile")
---
##### Tablet
![Contact page](/assets/images/wireframe-tablet-contact-sm.png "Tablet")
---
##### Laptop
![Projects page](/assets/images/wireframe-laptop-contact-sm.png "Laptop")
---

## Code

### Languages used
* HTML
* CSS
* JavaScript

### Style overrides

#### Navbar overrides to replace Bootstrap defaults
``` css
.navbar {
    /*background-color: rgb(162, 42, 164);*/
}

.navbar a {
    color: rgb(162, 42, 164);
}

.nav-pills {
	--bs-nav-pills-border-radius: 0.375rem;

	--bs-nav-pills-link-active-color: #fff;
    
	--bs-nav-pills-link-active-bg: rgb(162, 42, 164);
}
```
## Credits
All images are my own.
Music in the YouTube video is supplied as part of the user agreement to improve UX.

### Acknoledgements

* Bootstrap
* Bootstrap documentation
* Google reCAPCHA
* Google reCAPCHA documentation

## Deployment

To deploy I will use a GitHub action script from SamKirkland/FTP-Deploy-Action@4.3.0

* Created a secret in the repository FTP_PASSWORD
* Edit the script to point to my web host FTP server
* Test run carried out
* Check all files are uploaded

The script will run every time I push to master which means I can use my local environment for most of the testing while having an automated deployment system that is very simple.

Script code :
``` yml
on: push
name: Deploy website on push
jobs:
  web-deploy:
    name: Deploy
    runs-on: ubuntu-latest
    steps:
    - name: Get latest code
      uses: actions/checkout@v2
    
    - name: Sync files
      uses: SamKirkland/FTP-Deploy-Action@4.3.0
      with:
        server: ftp.hostmysite.wales
        username: githubftp@leah.wales
        password: ${{ secrets.ftp_password }}
        protocol: ftps
```
![Github action](/assets/images/workflow_action_deploy.jpg "Github action deploy")

![Site live](/assets/images/website_live.jpg "Website Live") 


## Testing

Expected
Site is expected to do X when user does y

Testing
Tested the site by doint y

Result
The site did not produce the required result
or
The site worked as expected and did y

Fix
I did z to code because J

https://developer.chrome.com/docs/lighthouse/overview/

## Bugs discovered