#!/bin/sh
export AWS_DEFAULT_REGION=us-east-1
STACK=$(aws opsworks describe-stacks | jq -r ".Stacks | map(select(.Name == \"$2\"))[0]")
STACK_ID=$(echo $STACK | jq -r ".StackId")
IP=$(aws opsworks describe-instances --stack-id $STACK_ID | jq -r '[.Instances[0].ElasticIp?, .Instances[0].PublicIp?, .Instances[0].PrivateIp?] | map(select(.))[0]')
ssh  -o UserKnownHostsFile='/dev/null' -o StrictHostKeyChecking=no -l $1 $IP

