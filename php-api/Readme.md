docker network ls

docker network connect laradock_backend react_app
  
docker inspect -f '{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' laradock_workspace_1