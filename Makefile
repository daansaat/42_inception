all:
		docker compose -f ./srcs/docker-compose.yml up -d --build
#		docker compose -f ./srcs/docker-compose.yml up --build

# logs:
# docker compose -f ./srcs/docker-compose.yml logs

down:
		docker compose -f ./srcs/docker-compose.yml down

fclean:	down
		docker system prune --all --force --volumes

re:		fclean all

.PHONY: all down fclean re
