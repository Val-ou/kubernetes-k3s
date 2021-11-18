kubectl delete deployment phpmyadmin-deployment
kubectl delete deployment httpd-deployment
kubectl delete deployment mysql-deployment
kubectl delete service phpmyadmin-service
kubectl delete service httpd-service
kubectl delete service mysql-service
kubectl delete HorizontalPodAutoscaler httpd-autoscaling
pause
