# MSA

# Stack

# Module

- SSO
- Ecommerce

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
  + canary
  
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
  + allow access to service
  + domain for service cluster

- configmap: env
- secret: credential

- job: run pod at one time
- cronjob: schedule job
- parallel job: work queue

- scheduler
  + assign pod to node
  + node affinity: schedule to only subnet of nodes
- stateful:
  + contain volume
  + one pod one storage

- daemonset
  + one pod one node
  
- role based access control: restrict access to resource
- networking policy: like CORs

# Docker
- dangling image
- volume remove
- restart policy:
  + never
  + on failed
  + alway restart
  + unless stop
- cmd, entrypoint, start
- exit code
- event
- privileged

