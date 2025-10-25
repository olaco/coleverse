#!/bin/sh
mkdir -p docker-compose/nginx/ssl

openssl req -x509 -nodes -days 365 \
  -newkey rsa:2048 \
  -keyout docker-compose/nginx/ssl/self-signed.key \
  -out docker-compose/nginx/ssl/self-signed.crt \
  -subj "/CN=laravel.test/O=Local Development"
