#!/bin/bash

# Delete all resources in the default namespace
kubectl delete all --all -n default
kubectl delete configmap --all -n default
kubectl delete secret --all -n default
kubectl delete pvc --all -n default
kubectl delete ingress --all -n default
kubectl delete ingressroute --all -n default
kubectl delete rolebinding --all -n default
kubectl delete role --all -n default

# Delete all resources in the kube-public namespace (for Traefik)
kubectl delete all --all -n kube-public
kubectl delete configmap --all -n kube-public
kubectl delete secret --all -n kube-public
kubectl delete ingress --all -n kube-public
kubectl delete ingressroute --all -n kube-public
kubectl delete rolebinding --all -n kube-public
kubectl delete role --all -n kube-public

# Delete Persistent Volumes (PVs)
kubectl delete pv --all

# Delete Cluster Role Bindings and Cluster Roles
kubectl delete clusterrolebinding --all
kubectl delete clusterrole --all

echo "All Kubernetes resources have been deleted."
