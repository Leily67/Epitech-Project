kubectl apply -f cadvisor.daemonset.yaml
kubectl apply -f postgres.secret.yaml -f postgres.configmap.yaml -f postgres.volume.yaml -f postgres.deployment.yaml -f postgres.service.yaml
kubectl apply -f redis.configmap.yaml -f redis.deployment.yaml -f redis.service.yaml
kubectl apply -f poll.deployment.yaml -f worker.deployment.yaml -f result.deployment.yaml -f poll.service.yaml -f result.service.yaml -f poll.ingress.yaml -f result.ingress.yaml
kubectl apply -f traefik.rbac.yaml -f traefik.deployment.yaml -f traefik.service.yaml
echo "CREATE TABLE votes (id text PRIMARY KEY, vote text NOT NULL);" | kubectl exec -i -c psql -U
echo "$(kubectl get nodes -o jsonpath='{ $.items[*].status.addresses[?(@.type == "ExternalIP")].address }') poll.dop.io result.dop.io" | sudo tee -a /etc/hosts
