NAME	:= inception
DOCKER	:= docker-compose --project-directory=srcs -p $(NAME)

build:
	$(DOCKER) build

up:
	$(DOCKER) up

down:
	$(DOCKER) down

start:
	$(DOCKER) start

stop:
	$(DOCKER) stop

restart:
	$(DOCKER) stop
	$(DOCKER) up -d

run:
	$(DOCKER) run $(c)

destroy:
	$(DOCKER) down -v
