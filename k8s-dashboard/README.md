# Procédure d'instalation de Kubernetes Dashboard

## Instalation de kubernetes-dashboard v2.3.1

```shell
kubectl apply -f https://raw.githubusercontent.com/kubernetes/dashboard/v2.3.1/aio/deploy/recommended.yaml
```

## Création d'un compte
voire `dashboard.admin-user.yaml`

## Rôles du compte
voire `dashboard.admin-user-role.yaml`

## Appliquer les config

```shell
kubectl apply -f dashboard.admin-user.yaml
kubectl apply -f dashboard.admin-user-role.yaml
```

## Get du token d'authetification

```shell
kubectl -n kubernetes-dashboard get secret $(kubectl -n kubernetes-dashboard get sa/admin-user -o jsonpath="{.secrets[0].name}") -o go-template="{{.data.token | base64decode}}"
```
http://localhost:8001/api/v1/namespaces/kubernetes-dashboard/services/https:kubernetes-dashboard:/proxy/

[Source](https://github.com/kubernetes/dashboard/blob/master/docs/user/access-control/creating-sample-user.md)