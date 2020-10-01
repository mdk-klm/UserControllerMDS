#Project to learn object programming : very simple php Api
1. Clone the repository `git clone https://github.com/humqn/simplephpapi.git`
2. Move to the project directory : `cd simplephpapi/`
3. Launch the project on port 80 : `docker run -d -p 80:80 -v ${PWD}:/app mattrayner/lamp:latest-1804`
Now you can access to the project at (http://localhost)
To see error log :
launch this command `docker ps` and copy the CONTAINER ID value, and execute this command
`docker exec 'REPLACE BY CONTAINER ID' tail -f /var/log/apache2/error.log`
