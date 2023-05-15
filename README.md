# PHP7.4 and MariaDB By Docker

## Create Data Folder

```bash
mkdir ./docker/db/data
```

## Start Docker

```bash
docker compose up -d
```

## Stop Docker

```bash
docker compose down
```

## Open Localhost

```bash
open http://localhost:8080
```

## Access to MySQL Container

```bash
docker compose exec database mysql -u {{username}} -p
```
