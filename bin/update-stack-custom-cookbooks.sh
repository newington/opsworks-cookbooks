#!/bin/sh
export AWS_DEFAULT_REGION=us-east-1
STACK=$(aws opsworks describe-stacks | jq -r ".Stacks | map(select(.Name == \"$1\"))[0]".StackId)
aws opsworks create-deployment --stack-id $STACK --command '{"Name": "update_custom_cookbooks"}'
