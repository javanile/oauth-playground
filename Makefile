
start: serve

serve: stop build
	@docker-compose build oauth-playground
	@docker-compose up -d --force-recreate
	@echo "Visit: <http://localhost:8080>"

build:
	@docker-compose build oauth-playground

stop:
	@docker stop $$(docker ps | grep ":8080" | cut -c1-12) > /dev/null 2>&1 || true