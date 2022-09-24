# ACMS clone

# Stack

# Module

- SSO
- Profile
- Project
- Commerce
- Notice

# Architect

- SSO
- Restful API
- SAGA pattern
- Event driven
- API gateway
- Automation test
- Load test

# Technology

- Kafka
- ELK
- MongDB
- Redis
- K8S
- Istio
- Envoy
- Prometheus
- Grafana
- Helm
- Jaeger
- EKS
- Docker
- Terraform
- Ansible
- Rancher
- Xray

# Kubernetes

- pod
  + label
  + namespace
  
- replica
  + number of pods
  
- deployment
  + recreate
  + rollingupdate
  + rollout
  
- service
  + clusterIP: internal
  + nodeport: expose port
  + load balancer
  
- volume
  + emptydir: share data between container
  + gitrepo: clone git to container
  + hostpath: filesystem of node
  + cloud storage: persistent data

- persistent volume claim
  
- ingress:
  + domain for service cluster

- configmap: env
- secret: credential

- job: run pod at one time
- cronjob: schedule job
- scheduler
- stateful: one pod one storage

- daemonset
  + one pod one node
  
- networking
- policy
- security
