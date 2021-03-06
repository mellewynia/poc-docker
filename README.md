
Christmas ’18 proof of concept to migrate one of my (older) local workflows from MAMP (Stack: PHP with MYSQL) to Docker. Use .env file for all env specific settings (see .env-example).

# Basics

- __Dockerfile__: A Dockerfile is a simple text file that contains the commands a user could call to assemble an image.
- __Docker compose__: is a tool for defining and running multi-container Docker applications. And defines the services that make up your app in `docker-compose.yml` so they can run together in an isolated environment. Gets an app running in one command by just running `docker-compose up`... (after `docker-compose build`).

[More info by __kyo__ on Stack Overflow](https://stackoverflow.com/questions/29480099/docker-compose-vs-dockerfile-which-is-better) and an [Intro to Docker](https://docker-curriculum.com/#docker-on-aws)


# Start

- Create __./.env__ file (based upon __./.env-template__)
    - __Reminder__: restart docker-compose after update to .env
    - __Reminder__: .env variables are always strings
- Navigate to root folder with: `docker-compose.yml`
    - __Reminder__: if you do not nav to root, `docker-compose` may behave unexpectedly
- `docker-compose build`
- `docker-compose up`
- Go to your fav. database tool and login localhost:3306 to init the database.

##### Start silently & Shutdown

- `docker-compose up -d` starts containers, detaches tty
- `docker-compose down` stops containers

##### Find IPAddress

- `docker ps`
- `docker inspect <container id> | grep "IPAddress"`