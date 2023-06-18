FROM public.ecr.aws/c5x5u9a5/php-apache:7.4-alpine
WORKDIR /app
COPY --chown=apache:apache . .
