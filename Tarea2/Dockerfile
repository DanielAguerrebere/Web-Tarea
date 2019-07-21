FROM node:11.15.0-alpine AS board-build
WORKDIR /app
COPY src ./
RUN yarn
RUN yarn run build