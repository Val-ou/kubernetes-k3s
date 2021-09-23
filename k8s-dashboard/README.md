# Procédure d'instalation de Kubernetes Dashboard

## Instalation de kubernetes-dashboard

> Voire https://rancher.com/docs/k3s/latest/en/installation/kube-dashboard/

## Get du token d'authetification

```shell
kubectl -n kubernetes-dashboard describe secret admin-user-token
```
## Accès
> http://localhost:8001/api/v1/namespaces/kubernetes-dashboard/services/https:kubernetes-dashboard:/proxy/
