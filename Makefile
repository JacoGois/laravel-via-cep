# Load .env file if it exists
include .env

up:
	@docker-compose up -d

stop:
	@docker-compose stop

down:
	@docker-compose down

status:
	@docker-compose ps

logs:
	@docker-compose logs -f

php:
	@docker-compose exec via_cep_php-fpm bash

mysql:
	@docker exec -ti via_cep_database mysql --user=$(DB_USERNAME) --password=$(DB_PASSWORD) --database=$(DB_DATABASE)

composer:
	docker run -it \
		--entrypoint /bin/sh \
		--volume ${PWD}:/application \
		--workdir /application \
		composer
