override NAME   := inception
override DOCKER := docker-compose --project-directory=srcs -p $(NAME)



build:	folders
	@$(DOCKER) build

up:	folders
	@$(DOCKER) up -d

down:
	@$(DOCKER) down

start:
	@$(DOCKER) start

stop:
	@$(DOCKER) stop

restart:folders
	@$(DOCKER) stop
	@$(DOCKER) up -d

exec:
	@$(DOCKER) exec $(c)

run:
	@$(DOCKER) run $(c)

destroy:
	@$(DOCKER) down -v

folders:
	@mkdir -p /home/scros/data/database
	@mkdir -p /home/scros/data/wordpress

.PHONY:	build up down start stop restart exec run destroy folders
