all:
		docker compose -f ./srcs/docker-compose.yml up -d --build

down:
		docker compose -f ./srcs/docker-compose.yml down

clean: down
		docker system prune --force --volumes
		rm -rf $(HOME)/data/wordpress
		rm -rf $(HOME)/data/mariadb

fclean: clean
	docker system prune --all --force
# docker rmi $$(docker images -q)
# rm -rf $(HOME)/data/wordpress
# rm -rf $(HOME)/data/mariadb

# fclean:	down clean
# 		docker system prune --all --force --volumes
# 		rm -rf $(HOME)/data/wordpress
# 		rm -rf $(HOME)/data/mariadb

re:	fclean all

.PHONY: all down clean fclean re
