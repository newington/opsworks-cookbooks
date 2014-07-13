#!/bin/bash
export AWS_DEFAULT_REGION=us-east-1
STACK=$(aws opsworks describe-stacks | jq -r ".Stacks | map(select(.Name == \"$1\"))[0]")
STACK_ID=$(echo $STACK | jq -r ".StackId")
APP_ID=$(aws opsworks describe-apps --stack-id $STACK_ID | jq -r '.[][0].AppId')

printf "Deploying: "
aws opsworks describe-apps --stack-id $STACK_ID | jq -r '.[][0].Name'

DEPLOY_ID=$(aws opsworks create-deployment --stack-id $STACK_ID --app-id $APP_ID --command '{"Name":"deploy","Args":{"migrate":["true"]}}' | jq -r '.DeploymentId')

DEPLOY_STATUS=$(aws opsworks describe-deployments --deployment-id $DEPLOY_ID | jq -r '.Deployments[0].Status')
while [ $DEPLOY_STATUS = "running" ]
do
  echo $DEPLOY_STATUS
  sleep 2
  DEPLOY_STATUS=$(aws opsworks describe-deployments --deployment-id $DEPLOY_ID | jq -r '.Deployments[0].Status')
done
echo $DEPLOY_STATUS
