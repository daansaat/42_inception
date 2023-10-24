all:
		mkdir -p $(HOME)/data/wordpress
		mkdir -p $(HOME)/data/mariadb
		docker compose -f ./srcs/docker-compose.yml up -d --build

down:
		docker compose -f ./srcs/docker-compose.yml down

clean: down
		docker system prune --force --volumes
		rm -rf $(HOME)/data/wordpress
		rm -rf $(HOME)/data/mariadb

fclean: clean
	docker system prune --all --force

re:	fclean all

.PHONY: all down clean fclean re
