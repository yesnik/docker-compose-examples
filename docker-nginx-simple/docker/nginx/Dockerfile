FROM ubuntu:18.10

RUN apt-get update && apt-get install -y \
  nginx

ADD ./nginx.conf /etc/nginx/nginx.conf

CMD ["nginx", "-g", "daemon off;"]
