# Procédure d'instalation de la registry de github pour docker

## Configuration

Il faut avoir créer une clef d'api avec
read:packages
write:packages
delete:packages

## Authentification dans docker

```shell
docker login ghcr.io -u valentinfischereduvaud
```
Il faut ensuite coller la clef

## Utilisation

```shell
docker image tag nginx:latest ghcr.io/valentinfischereduvaud/nginx:v1
docker image push ghcr.io/valentinfischereduvaud/nginx:v1
```

## Source
> https://blog.bitsrc.io/using-github-container-registry-in-practice-295677c6f65e