#!/bin/bash
export AWS_DEFAULT_REGION=us-east-1
STACK_ID=$(aws opsworks describe-stacks | jq -r ".Stacks | map(select(.Name == \"$1\"))[0]".StackId)
DEPLOY_ID=$(aws opsworks create-deployment --stack-id $STACK_ID --command '{"Name": "update_custom_cookbooks"}' | jq -r '.DeploymentId')

DEPLOY_STATUS=$(aws opsworks describe-deployments --deployment-id $DEPLOY_ID | jq -r '.Deployments[0].Status')
while [ $DEPLOY_STATUS = "running" ]
do
  echo $DEPLOY_STATUS
  sleep 2
  DEPLOY_STATUS=$(aws opsworks describe-deployments --deployment-id $DEPLOY_ID | jq -r '.Deployments[0].Status')
done
echo $DEPLOY_STATUS
