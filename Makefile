override NAME	:= inception
override DOCKER	:= docker-compose --project-directory=srcs -p $(NAME)

build:
	@$(DOCKER) build

up:
	@$(DOCKER) up -d

down:
	@$(DOCKER) down

start:
	@$(DOCKER) start

stop:
	@$(DOCKER) stop

restart:
	@$(DOCKER) stop
	@$(DOCKER) up -d

exec:
	@$(DOCKER) exec $(c)

run:
	@$(DOCKER) run $(c)

destroy:
	@$(DOCKER) down -v
