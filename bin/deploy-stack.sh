#!/bin/sh
export AWS_DEFAULT_REGION=us-east-1
STACK=$(aws opsworks describe-stacks | jq -r ".Stacks | map(select(.Name == \"$1\"))[0]")
STACK_ID=$(echo $STACK | jq -r ".StackId")
APP_ID=$(aws opsworks describe-apps --stack-id $STACK_ID | jq -r '.[][0].AppId')
printf "Deploying: "
aws opsworks describe-apps --stack-id $STACK_ID | jq -r '.[][0].Name'
aws opsworks create-deployment --stack-id $STACK_ID --app-id $APP_ID --command '{"Name": "deploy"}'

