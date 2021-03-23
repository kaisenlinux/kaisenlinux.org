# SEO

## TASKS

1. Create sitemap
	- Removing downloads.php and all urls with parameters on iso subdomains.  
	- Add forum subdomain

2. Remove downloads.php from sitemap and replace on page links with /downloads  
	- Warning: to check error with _functions.php title ?

3. Fix broken links:  
	- page downloads, link ISO SR on mirror 1 is broken.   
	fixed by changing checksum.txt with kaisenlinuxrolling1.5-amd64-SR.iso instead of kaisenlinux1.5-amd64-SR.iso  

	- page documentation/update : link Update kaisen rolling broken
	fixed by updating git repo documentation-dev/md/update.md with redirect to documentation/faq#update-kaisen-linux-rolling

	- page documentation/faq : link to create-your-own-skel not found  
	fixedf by updating git repo documentation-dev/md/faq.md with link documentation/faq#how-to-create-your-own-default-profile-for-user-configurations-skel

## Notes : Suggests

- Create a www with redirect to root domain ?  
- Create a X-ROBOTS-TAGS to ignore parameters after iso.kaisenlinux.org/[release]/  
- Generate /documentation with `mix docs --canonical`
