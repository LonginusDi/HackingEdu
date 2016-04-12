# Production

## Setup for Windows  

    1. Install WAMP
        * WAMPSERVER 2.5: http://www.wampserver.com/en/#download-wrapper  

    2. Create your test sql db  

    3. Run SQL script in db-rrv3 repo on your test db  

    4. Modify settings on environment.php and constant.php (get rid of template in the filename)  

    5. Copy to .htaccess from .htaccess.template  

    6. Enable rewrite_module in WAMP's Apache modules  

    7. Adjust git line setting by git config --global core.autocrlf true
