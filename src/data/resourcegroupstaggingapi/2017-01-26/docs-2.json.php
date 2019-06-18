<?php
// This file was auto-generated from sdk-root/src/data/resourcegroupstaggingapi/2017-01-26/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>Resource Groups Tagging API</fullname> <p>This guide describes the API operations for the resource groups tagging.</p> <p>A tag is a key-value pair that you can add to an AWS resource. A tag consists of a key and a value, both of which you define. For example, if you have two Amazon EC2 instances, you might assign both a tag key of "Stack." But the value of "Stack" might be "Testing" for one and "Production" for the other.</p> <p>Tagging can help you organize your resources and enables you to simplify resource management, access management, and cost allocation. </p> <p>You can use the resource groups tagging API operations to complete the following tasks:</p> <ul> <li> <p>Tag and untag supported resources located in the specified Region for the AWS account.</p> </li> <li> <p>Use tag-based filters to search for resources located in the specified Region for the AWS account.</p> </li> <li> <p>List all existing tag keys in the specified Region for the AWS account.</p> </li> <li> <p>List all existing values for the specified key in the specified Region for the AWS account.</p> </li> <li> <p>Configure <i>tag policies</i> to help maintain standardized tags across your organization\'s resources. For more information on tag policies, see <a href="http://docs.aws.amazon.com/ARG/latest/userguide/tag-policies.html">Tag Policies</a>in the <i>AWS Resource Groups User Guide.</i> </p> </li> </ul> <p>To make full use of the resource groups tagging API operations, you might need additional IAM permissions, including permission to access the resources of individual services as well as permission to view and apply tags to those resources. For more information, see <a href="http://docs.aws.amazon.com/ARG/latest/userguide/gettingstarted-prereqs.html#rg-permissions">Set Up Permissions</a> in the <i>AWS Resource Groups User Guide.</i> </p> <p>You can use the Resource Groups Tagging API to tag resources for the following AWS services.</p> <ul> <li> <p>Alexa for Business (a4b)</p> </li> <li> <p>API Gateway</p> </li> <li> <p>AWS AppStream</p> </li> <li> <p>Amazon Athena</p> </li> <li> <p>Amazon Aurora</p> </li> <li> <p>AWS Certificate Manager</p> </li> <li> <p>AWS Certificate Manager Private CA</p> </li> <li> <p>Amazon Cloud Directory</p> </li> <li> <p>AWS CloudFormation</p> </li> <li> <p>Amazon CloudFront</p> </li> <li> <p>AWS CloudHSM</p> </li> <li> <p>AWS CloudTrail</p> </li> <li> <p>Amazon CloudWatch (alarms only)</p> </li> <li> <p>Amazon CloudWatch Events</p> </li> <li> <p>Amazon CloudWatch Logs</p> </li> <li> <p>AWS CodeBuild</p> </li> <li> <p>AWS CodeStar</p> </li> <li> <p>Amazon Cognito Identity</p> </li> <li> <p>Amazon Cognito User Pools</p> </li> <li> <p>Amazon Comprehend</p> </li> <li> <p>AWS Config</p> </li> <li> <p>AWS Data Pipeline</p> </li> <li> <p>AWS Database Migration Service</p> </li> <li> <p>AWS Datasync</p> </li> <li> <p>AWS Direct Connect</p> </li> <li> <p>AWS Directory Service</p> </li> <li> <p>Amazon DynamoDB</p> </li> <li> <p>Amazon EBS</p> </li> <li> <p>Amazon EC2</p> </li> <li> <p>Amazon ECR</p> </li> <li> <p>Amazon ECS</p> </li> <li> <p>AWS Elastic Beanstalk</p> </li> <li> <p>Amazon Elastic File System</p> </li> <li> <p>Elastic Load Balancing</p> </li> <li> <p>Amazon ElastiCache</p> </li> <li> <p>Amazon Elasticsearch Service</p> </li> <li> <p>AWS Elemental MediaLive</p> </li> <li> <p>AWS Elemental MediaPackage</p> </li> <li> <p>AWS Elemental MediaTailor</p> </li> <li> <p>Amazon EMR</p> </li> <li> <p>Amazon FSx</p> </li> <li> <p>Amazon Glacier</p> </li> <li> <p>AWS Glue</p> </li> <li> <p>Amazon Inspector</p> </li> <li> <p>AWS IoT Analytics</p> </li> <li> <p>AWS IoT Core</p> </li> <li> <p>AWS IoT Device Defender</p> </li> <li> <p>AWS IoT Device Management</p> </li> <li> <p>AWS Key Management Service</p> </li> <li> <p>Amazon Kinesis</p> </li> <li> <p>Amazon Kinesis Data Firehose</p> </li> <li> <p>AWS Lambda</p> </li> <li> <p>AWS License Manager</p> </li> <li> <p>Amazon Machine Learning</p> </li> <li> <p>Amazon MQ</p> </li> <li> <p>Amazon MSK</p> </li> <li> <p>Amazon Neptune</p> </li> <li> <p>AWS OpsWorks</p> </li> <li> <p>Amazon RDS</p> </li> <li> <p>Amazon Redshift</p> </li> <li> <p>AWS Resource Access Manager</p> </li> <li> <p>AWS Resource Groups</p> </li> <li> <p>AWS RoboMaker</p> </li> <li> <p>Amazon Route 53</p> </li> <li> <p>Amazon Route 53 Resolver</p> </li> <li> <p>Amazon S3 (buckets only)</p> </li> <li> <p>Amazon SageMaker</p> </li> <li> <p>AWS Secrets Manager</p> </li> <li> <p>AWS Service Catalog</p> </li> <li> <p>Amazon Simple Queue Service (SQS)</p> </li> <li> <p>AWS Simple System Manager (SSM)</p> </li> <li> <p>AWS Step Functions</p> </li> <li> <p>AWS Storage Gateway</p> </li> <li> <p>AWS Transfer for SFTP</p> </li> <li> <p>Amazon VPC</p> </li> <li> <p>Amazon WorkSpaces</p> </li> </ul>', 'operations' => [ 'DeleteTagPolicy' => '<p>Deletes the policy that is attached to the specified organization root or account.</p> <p>You can call this operation from the organization\'s master account only and from the us-east-1 Region only. </p>', 'DescribeReportCreation' => '<p>Describes the status of the <code>StartReportCreation</code> operation. </p> <p>You can call this operation from the organization\'s master account only and from the us-east-1 Region only. </p>', 'DisableTagPolicies' => '<p>Disables tag policies for your organization and deletes all tag policies.</p> <p>You can call this operation from the organization\'s master account only and from the us-east-1 Region only. </p> <important> <p>Use caution when disabling tag policies, as this is a destructive operation that applies to your entire organization. You cannot undo this operation.</p> </important>', 'EnableTagPolicies' => '<p>Enables tag policies for your organization. To use tag policies, you must be using AWS Organizations with all features enabled. </p> <p>You can call this operation from the organization\'s master account only and from the us-east-1 Region only. </p> <p>This operation does the following:</p> <ul> <li> <p>Enables tag policies for the specified organization.</p> </li> <li> <p>Calls the <a href="http://docs.aws.amazon.com/organizations/latest/APIReference/API_EnableAWSServiceAccess.html">EnableAWSServiceAccess</a> API on your behalf to allow service access with the <code>tagpolicies.tag.amazonaws.com</code> service principal.</p> </li> <li> <p>Creates a <a href="http://docs.aws.amazon.com/IAM/latest/UserGuide/using-service-linked-roles.html">service-linked role</a> named <code>AWSServiceRoleForTagPolicies</code>. </p> </li> </ul> <p>For more information on tag policies, see <a href="http://docs.aws.amazon.com/ARG/latest/userguide/tag-policies.html">Tag Policies</a> in the <i>AWS Resource Groups User Guide.</i> </p>', 'GetComplianceSummary' => '<p>Returns a table that shows counts of resources that are noncompliant with their tag policies.</p> <p>For more information on tag policies, see <a href="http://docs.aws.amazon.com/ARG/latest/userguide/tag-policies.html">Tag Policies</a> in the <i>AWS Resource Groups User Guide.</i> </p> <p>You can call this operation from the organization\'s master account only and from the us-east-1 Region only. </p>', 'GetEffectiveTagPolicy' => '<p>Returns the contents of the effective tag policy for the AWS account. Depending on how you use tag policies, the effective tag policy for an account is one of the following:</p> <ul> <li> <p>The tag policy attached to the organization that the account belongs to.</p> </li> <li> <p>The tag policy attached to the account.</p> </li> <li> <p>The combination of both policies if tag policies are attached to the organization root and account.</p> </li> </ul>', 'GetResources' => '<p>Returns all the tagged or previously tagged resources that are located in the specified Region for the AWS account.</p> <p>Depending on what information you want returned, you can also specify the following:</p> <ul> <li> <p> <i>Filters</i> that specify what tags and resource types you want returned. The response includes all tags that are associated with the requested resources.</p> </li> <li> <p>Information about compliance with tag policies. If supplied, the compliance check follows the specified tag policy instead of following the effective tag policy. For more information on tag policies, see <a href="http://docs.aws.amazon.com/ARG/latest/userguide/tag-policies.html">Tag Policies</a> in the <i>AWS Resource Groups User Guide.</i> </p> </li> </ul> <note> <p>You can check the <code>PaginationToken</code> response parameter to determine if a query completed. Queries can occasionally return fewer results on a page than allowed. The <code>PaginationToken</code> response parameter value is <code>null</code> <i>only</i> when there are no more results to display. </p> </note>', 'GetTagKeys' => '<p>Returns all tag keys in the specified Region for the AWS account.</p> <note> <p>You can check the <code>PaginationToken</code> response parameter to determine if a query completed. Queries can occasionally return fewer results on a page than allowed. The <code>PaginationToken</code> response parameter value is <code>null</code> <i>only</i> when there are no more results to display. </p> </note>', 'GetTagPolicy' => '<p>Returns the policy that is attached to the specified target. </p> <p>You can call this operation from the organization\'s master account only and from the us-east-1 Region only. </p>', 'GetTagValues' => '<p>Returns all tag values for the specified key in the specified Region for the AWS account.</p> <note> <p>You can check the <code>PaginationToken</code> response parameter to determine if a query completed. Queries can occasionally return fewer results on a page than allowed. The <code>PaginationToken</code> response parameter value is <code>null</code> <i>only</i> when there are no more results to display. </p> </note>', 'PutTagPolicy' => '<p>Validates the tag policy and then attaches it to the account or organization root. This policy determines whether a resource is compliant.</p> <p>Validating the tag policy includes checking that the tag policy document includes the required components, uses JSON syntax, and has fewer than 5,000 characters (including spaces). For more information, see <a href="http://docs.aws.amazon.com/ARG/latest/userguide/tag-policies-structure.html">Tag Policy Structure</a> in the <i>AWS Resource Groups User Guide.</i> </p> <note> <p>If you later call this operation to attach a tag policy to the same organization root or account, it overwrites the original call without prompting you to confirm.</p> </note> <p>You can call this operation from the organization\'s master account only, and from the us-east-1 Region only. </p>', 'StartReportCreation' => '<p>Generates a report that lists all tagged resources in accounts across your organization, and whether each resource is compliant with the effective tag policy. </p> <p>You can call this operation from the organization\'s master account only and from the us-east-1 Region only. </p>', 'TagResources' => '<p>Applies one or more tags to the specified resources. Note the following:</p> <ul> <li> <p>Not all resources can have tags. For a list of resources that support tagging, see <a href="https://docs.aws.amazon.com/resourcegroupstagging/latest/APIReference/Welcome.html">this list</a>.</p> </li> <li> <p>Each resource can have up to 50 tags. </p> </li> <li> <p>You can only tag resources that are located in the specified Region for the AWS account.</p> </li> <li> <p>To add tags to a resource, you need the necessary permissions for the service that the resource belongs to as well as permissions for adding tags. For more information, see <a href="http://docs.aws.amazon.com/ARG/latest/userguide/gettingstarted-prereqs.html#rg-permissions">Set Up Permissions</a> in the <i>AWS Resource Groups User Guide.</i> </p> </li> </ul>', 'UntagResources' => '<p>Removes the specified tags from the specified resources. When you specify a tag key, the action removes both that key and its associated value. The operation succeeds even if you attempt to remove tags from a resource that were already removed. Note the following:</p> <ul> <li> <p>To remove tags from a resource, you need the necessary permissions for the service that the resource belongs to as well as permissions for removing tags. For more information, see <a href="http://docs.aws.amazon.com/ARG/latest/userguide/gettingstarted-prereqs.html#rg-permissions">Set Up Permissions</a> in the <i>AWS Resource Groups User Guide.</i> </p> </li> <li> <p>You can only tag resources that are located in the specified Region for the AWS account.</p> </li> </ul>', ], 'shapes' => [ 'AmazonResourceType' => [ 'base' => NULL, 'refs' => [ 'ResourceTypeFilterList$member' => NULL, 'Summary$ResourceType' => '<p>The resource type.</p>', ], ], 'ComplianceDetails' => [ 'base' => '<p>Details on whether a resource is compliant with the effective tag policy, including information any noncompliant tag keys.</p>', 'refs' => [ 'ResourceTagMapping$ComplianceDetails' => '<p>Details on whether a resource is compliant with the effective tag policy, including information about any noncompliant tag keys.</p>', ], ], 'ComplianceStatus' => [ 'base' => NULL, 'refs' => [ 'ComplianceDetails$ComplianceStatus' => '<p>Whether a resource is compliant with the effective tag policy.</p>', ], ], 'ConcurrentModificationException' => [ 'base' => '<p>The target of the operation is currently being modified by a different request. Try again later.</p>', 'refs' => [], ], 'ConstraintViolationException' => [ 'base' => '<p>The request was denied as performing this operation violates a constraint. </p> <p>Some of the reasons in the following list might not apply to this specific API or operation:</p> <ul> <li> <p>Your account must be part of an organization, and you must enable all features in AWS Organizations. <a href="http://docs.aws.amazon.com/ARG/latest/userguide/gettingstarted-prereqs.html#rg-permissions">Set Up Permissions</a> in the <i>AWS Resource Groups User Guide.</i> </p> </li> <li> <p>The previous report expired. </p> </li> </ul>', 'refs' => [], ], 'DeleteTagPolicyInput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteTagPolicyOutput' => [ 'base' => NULL, 'refs' => [], ], 'DescribeReportCreationInput' => [ 'base' => NULL, 'refs' => [], ], 'DescribeReportCreationOutput' => [ 'base' => NULL, 'refs' => [], ], 'DisableTagPoliciesInput' => [ 'base' => NULL, 'refs' => [], ], 'DisableTagPoliciesOutput' => [ 'base' => NULL, 'refs' => [], ], 'EnableTagPoliciesInput' => [ 'base' => NULL, 'refs' => [], ], 'EnableTagPoliciesOutput' => [ 'base' => NULL, 'refs' => [], ], 'ErrorCode' => [ 'base' => NULL, 'refs' => [ 'FailureInfo$ErrorCode' => '<p>The code of the common error. Valid values include <code>InternalServiceException</code>, <code>InvalidParameterException</code>, and any valid error code returned by the AWS service that hosts the resource that you want to tag.</p>', ], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'DescribeReportCreationOutput$ErrorMessage' => '<p>Details of the common errors that all operations return.</p>', 'FailureInfo$ErrorMessage' => '<p>The message of the common error.</p>', ], ], 'ExceptionMessage' => [ 'base' => NULL, 'refs' => [ 'ConcurrentModificationException$Message' => NULL, 'ConstraintViolationException$Message' => NULL, 'InternalServiceException$Message' => NULL, 'InvalidParameterException$Message' => NULL, 'PaginationTokenExpiredException$Message' => NULL, 'ThrottledException$Message' => NULL, ], ], 'ExcludeCompliantResources' => [ 'base' => NULL, 'refs' => [ 'GetResourcesInput$ExcludeCompliantResources' => '<p>Specifies whether to exclude resources that are compliant with the tag policy. Set this to <code>true</code> if you are interested in retrieving information on noncompliant resources only.</p> <p>You can use this parameter only if the <code>IncludeComplianceDetails</code> parameter is also set to <code>true</code>.</p>', ], ], 'FailedResourcesMap' => [ 'base' => NULL, 'refs' => [ 'TagResourcesOutput$FailedResourcesMap' => '<p>Details of resources that could not be tagged. An error code, status code, and error message are returned for each failed item.</p>', 'UntagResourcesOutput$FailedResourcesMap' => '<p>Details of resources that could not be untagged. An error code, status code, and error message are returned for each failed item.</p>', ], ], 'FailureInfo' => [ 'base' => '<p>Details of the common errors that all actions return.</p>', 'refs' => [ 'FailedResourcesMap$value' => NULL, ], ], 'GetComplianceSummaryInput' => [ 'base' => NULL, 'refs' => [], ], 'GetComplianceSummaryOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetEffectiveTagPolicyInput' => [ 'base' => NULL, 'refs' => [], ], 'GetEffectiveTagPolicyOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetResourcesInput' => [ 'base' => NULL, 'refs' => [], ], 'GetResourcesOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagKeysInput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagKeysOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagPolicyInput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagPolicyOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagValuesInput' => [ 'base' => NULL, 'refs' => [], ], 'GetTagValuesOutput' => [ 'base' => NULL, 'refs' => [], ], 'GroupBy' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$GroupBy' => '<p>A list of attributes to group the counts of noncompliant resources by. If supplied, the counts are sorted by those attributes.</p>', ], ], 'GroupByAttribute' => [ 'base' => NULL, 'refs' => [ 'GroupBy$member' => NULL, ], ], 'IncludeComplianceDetails' => [ 'base' => NULL, 'refs' => [ 'GetResourcesInput$IncludeComplianceDetails' => '<p>Specifies whether to include details regarding the compliance with the effective tag policy. Set this to <code>true</code> to determine whether resources are compliant with the tag policy and to get details.</p>', ], ], 'InternalServiceException' => [ 'base' => '<p>The request processing failed because of an unknown error, exception, or failure. You can retry the request.</p>', 'refs' => [], ], 'InvalidParameterException' => [ 'base' => '<p>This error indicates one of the following:</p> <ul> <li> <p>A parameter is missing.</p> </li> <li> <p>A malformed string was supplied for the request parameter.</p> </li> <li> <p>An out-of-range value was supplied for the request parameter.</p> </li> <li> <p>The target ID is invalid, unsupported, or doesn\'t exist.</p> </li> <li> <p>There is an issue with the tag policy: It exceeds the maximum size limit, is invalid, or doesn\'t use JSON syntax. </p> </li> <li> <p>You can\'t access the Amazon S3 bucket for report storage. For more information, see <a href="http://docs.aws.amazon.com/ARG/latest/userguide/tag-policies-prereqs.html#bucket-policy-org-report">Additional Requirements for Running Organization-Wide Tag Compliance Report</a> in the <i>AWS Resource Groups User Guide.</i> </p> </li> </ul>', 'refs' => [], ], 'LastUpdated' => [ 'base' => NULL, 'refs' => [ 'GetEffectiveTagPolicyOutput$LastUpdated' => '<p>The last time this tag policy was updated.</p>', 'GetTagPolicyOutput$LastUpdated' => '<p>The last time this policy was updated.</p>', 'Summary$LastUpdated' => '<p>The timestamp that shows when this summary was generated in this Region. </p>', ], ], 'MaxResultTagsDS1' => [ 'base' => NULL, 'refs' => [ 'GetTagKeysInput$MaxResults' => '<p>A limit that restricts the number of results that are returned per page.</p>', 'GetTagValuesInput$MaxResults' => '<p>A limit that restricts the number of results that are returned per page.</p>', ], ], 'MaxResultsGetComplianceSummary' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$MaxResults' => '<p>A limit that restricts the number of results that are returned per page.</p>', ], ], 'NonCompliantResources' => [ 'base' => NULL, 'refs' => [ 'Summary$NonCompliantResources' => '<p>The count of noncompliant resources.</p>', ], ], 'PaginationToken' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$PaginationToken' => '<p>A string that indicates that additional data is available. Leave this value empty for your initial request. If the response includes a <code>PaginationToken</code>, use that string for this value to request an additional page of data.</p>', 'GetComplianceSummaryOutput$PaginationToken' => '<p>A string that indicates that the response contains more data than can be returned in a single response. To receive additional data, specify this string for the <code>PaginationToken</code> value in a subsequent request.</p>', 'GetResourcesInput$PaginationToken' => '<p>A string that indicates that additional data is available. Leave this value empty for your initial request. If the response includes a <code>PaginationToken</code>, use that string for this value to request an additional page of data.</p>', 'GetResourcesOutput$PaginationToken' => '<p>A string that indicates that the response contains more data than can be returned in a single response. To receive additional data, specify this string for the <code>PaginationToken</code> value in a subsequent request.</p>', 'GetTagKeysInput$PaginationToken' => '<p>A string that indicates that additional data is available. Leave this value empty for your initial request. If the response includes a <code>PaginationToken</code>, use that string for this value to request an additional page of data.</p>', 'GetTagKeysOutput$PaginationToken' => '<p>A string that indicates that the response contains more data than can be returned in a single response. To receive additional data, specify this string for the <code>PaginationToken</code> value in a subsequent request.</p>', 'GetTagValuesInput$PaginationToken' => '<p>A string that indicates that additional data is available. Leave this value empty for your initial request. If the response includes a <code>PaginationToken</code>, use that string for this value to request an additional page of data.</p>', 'GetTagValuesOutput$PaginationToken' => '<p>A string that indicates that the response contains more data than can be returned in a single response. To receive additional data, specify this string for the <code>PaginationToken</code> value in a subsequent request.</p>', ], ], 'PaginationTokenExpiredException' => [ 'base' => '<p>A <code>PaginationToken</code> is valid for a maximum of 15 minutes. Your request was denied because the specified <code>PaginationToken</code> has expired.</p>', 'refs' => [], ], 'Policy' => [ 'base' => NULL, 'refs' => [ 'GetEffectiveTagPolicyOutput$Policy' => '<p>The contents of the tag policy that is effective for this account.</p>', 'GetResourcesInput$Policy' => '<p>The tag policy to check resources against for compliance. If supplied, the compliance check follows the specified tag policy instead of following the effective tag policy. Using this parameter to specify a tag policy is useful for testing new tag policies before attaching them to a target.</p> <p>You can only use this parameter if the <code>IncludeComplianceDetails</code> parameter is also set to <code>true</code>.</p>', 'GetTagPolicyOutput$Policy' => '<p>The policy that is attached to the specified target.</p>', 'PutTagPolicyInput$Policy' => '<p>The tag policy to attach to the target.</p>', ], ], 'PutTagPolicyInput' => [ 'base' => NULL, 'refs' => [], ], 'PutTagPolicyOutput' => [ 'base' => NULL, 'refs' => [], ], 'Region' => [ 'base' => NULL, 'refs' => [ 'RegionFilterList$member' => NULL, 'Summary$Region' => '<p>The AWS Region that the summary applies to.</p>', ], ], 'RegionFilterList' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$RegionFilters' => '<p>A list of Regions to limit the output by. If you use this parameter, the count of returned noncompliant resources includes only resources in the specified Regions.</p>', ], ], 'ResourceARN' => [ 'base' => NULL, 'refs' => [ 'FailedResourcesMap$key' => NULL, 'ResourceARNList$member' => NULL, 'ResourceTagMapping$ResourceARN' => '<p>The ARN of the resource.</p>', ], ], 'ResourceARNList' => [ 'base' => NULL, 'refs' => [ 'TagResourcesInput$ResourceARNList' => '<p>A list of ARNs. An ARN (Amazon Resource Name) uniquely identifies a resource. You can specify a minimum of 1 and a maximum of 20 ARNs (resources) to tag. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a> in the <i>AWS General Reference</i>.</p>', 'UntagResourcesInput$ResourceARNList' => '<p>A list of ARNs. An ARN (Amazon Resource Name) uniquely identifies a resource. You can specify a minimum of 1 and a maximum of 20 ARNs (resources) to untag. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a> in the <i>AWS General Reference</i>.</p>', ], ], 'ResourceTagMapping' => [ 'base' => '<p>A list of resource ARNs and the tags (keys and values) that are associated with each.</p>', 'refs' => [ 'ResourceTagMappingList$member' => NULL, ], ], 'ResourceTagMappingList' => [ 'base' => NULL, 'refs' => [ 'GetResourcesOutput$ResourceTagMappingList' => '<p>A list of resource ARNs and the tags (keys and values) associated with each.</p>', ], ], 'ResourceTypeFilterList' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$ResourceTypeFilters' => '<p>The constraints on the resources that you want returned. The format of each resource type is <code>service[:resourceType]</code>. For example, specifying a resource type of <code>ec2</code> returns all Amazon EC2 resources (which includes EC2 instances). Specifying a resource type of <code>ec2:instance</code> returns only EC2 instances. </p> <p>The string for each service name and resource type is the same as that embedded in a resource\'s Amazon Resource Name (ARN). Consult the <i>AWS General Reference</i> for the following:</p> <ul> <li> <p>For a list of service name strings, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a>.</p> </li> <li> <p>For resource type strings, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#arns-syntax">Example ARNs</a>.</p> </li> <li> <p>For more information about ARNs, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a>.</p> </li> </ul> <p>You can specify multiple resource types by using an array. The array can include up to 100 items. Note that the length constraint requirement applies to each resource type filter. </p>', 'GetResourcesInput$ResourceTypeFilters' => '<p>The constraints on the resources that you want returned. The format of each resource type is <code>service[:resourceType]</code>. For example, specifying a resource type of <code>ec2</code> returns all Amazon EC2 resources (which includes EC2 instances). Specifying a resource type of <code>ec2:instance</code> returns only EC2 instances. </p> <p>The string for each service name and resource type is the same as that embedded in a resource\'s Amazon Resource Name (ARN). Consult the <i>AWS General Reference</i> for the following:</p> <ul> <li> <p>For a list of service name strings, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a>.</p> </li> <li> <p>For resource type strings, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#arns-syntax">Example ARNs</a>.</p> </li> <li> <p>For more information about ARNs, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html">Amazon Resource Names (ARNs) and AWS Service Namespaces</a>.</p> </li> </ul> <p>You can specify multiple resource types by using an array. The array can include up to 100 items. Note that the length constraint requirement applies to each resource type filter. </p>', ], ], 'ResourcesPerPage' => [ 'base' => NULL, 'refs' => [ 'GetResourcesInput$ResourcesPerPage' => '<p>A limit that restricts the number of resources returned by GetResources in paginated output. You can set ResourcesPerPage to a minimum of 1 item and the maximum of 100 items. </p>', ], ], 'RootId' => [ 'base' => NULL, 'refs' => [ 'EnableTagPoliciesInput$RootId' => '<p>The root identifier of the organization. If you don\'t know the root ID, you can call the AWS Organizations <a href="http://docs.aws.amazon.com/organizations/latest/APIReference/API_ListRoots.html">ListRoots</a> API to find it. </p>', ], ], 'S3Bucket' => [ 'base' => NULL, 'refs' => [ 'StartReportCreationInput$S3Bucket' => '<p>The name of the Amazon S3 bucket where the report will be stored.</p> <p>For more information on S3 bucket requirements, including an example bucket policy, see <a href="http://docs.aws.amazon.com/ARG/latest/userguide/tag-policies-prereqs.html#bucket-policy-org-report">Additional Requirements for Running Organization-Wide Tag Compliance Report</a> in the <i>AWS Resource Groups User Guide.</i> </p>', ], ], 'S3Location' => [ 'base' => NULL, 'refs' => [ 'DescribeReportCreationOutput$S3Location' => '<p>The path to the Amazon S3 bucket where the report is stored.</p>', ], ], 'StartReportCreationInput' => [ 'base' => NULL, 'refs' => [], ], 'StartReportCreationOutput' => [ 'base' => NULL, 'refs' => [], ], 'Status' => [ 'base' => NULL, 'refs' => [ 'DescribeReportCreationOutput$Status' => '<p>Reports the status of the operation.</p> <p>The operation status can be one of the following:</p> <ul> <li> <p> <code>RUNNING</code>: Report generation is in progress.</p> </li> <li> <p> <code>SUCCEEDED</code>: Report generation is complete. You can open the report from the Amazon S3 bucket you specified when you ran <code>StartReportGeneration</code>.</p> </li> <li> <p> <code>FAILED</code>: Report generation timed out or the Amazon S3 bucket is not accessible. </p> </li> </ul>', ], ], 'StatusCode' => [ 'base' => NULL, 'refs' => [ 'FailureInfo$StatusCode' => '<p>The HTTP status code of the common error.</p>', ], ], 'Summary' => [ 'base' => '<p>A count of noncompliant resources.</p>', 'refs' => [ 'SummaryList$member' => NULL, ], ], 'SummaryList' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryOutput$SummaryList' => '<p>A table that shows counts of noncompliant resources.</p>', ], ], 'Tag' => [ 'base' => '<p>The metadata that you apply to AWS resources to help you categorize and organize them. Each tag consists of a key and an optional value, both of which you define. For more information, see <a href="http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/Using_Tags.html#tag-basics">Tag Basics</a> in the <i>Amazon EC2 User Guide for Linux Instances</i>.</p>', 'refs' => [ 'TagList$member' => NULL, ], ], 'TagFilter' => [ 'base' => '<p>A list of tags (keys and values) that are used to specify the associated resources.</p>', 'refs' => [ 'TagFilterList$member' => NULL, ], ], 'TagFilterList' => [ 'base' => NULL, 'refs' => [ 'GetResourcesInput$TagFilters' => '<p>A list of TagFilters (keys and values). Each TagFilter specified must contain a key with values as optional. A request can include up to 50 keys, and each key can include up to 20 values. </p> <p>Note the following when deciding how to use TagFilters:</p> <ul> <li> <p>If you <i>do</i> specify a TagFilter, the response returns only those resources that are currently associated with the specified tag. </p> </li> <li> <p>If you <i>don\'t</i> specify a TagFilter, the response includes all resources that were ever associated with tags. Resources that currently don\'t have associated tags are shown with an empty tag set, like this: <code>"Tags": []</code>.</p> </li> <li> <p>If you specify more than one filter in a single request, the response returns only those resources that satisfy all specified filters.</p> </li> <li> <p>If you specify a filter that contains more than one value for a key, the response returns resources that match any of the specified values for that key.</p> </li> <li> <p>If you don\'t specify any values for a key, the response returns resources that are tagged with that key irrespective of the value.</p> <p>For example, for filters: <code>filter1 = {key1, {value1}}, filter2 = {key2, {value2,value3,value4}} , filter3 = {key3}</code>:</p> <ul> <li> <p> <code>GetResources( {filter1} )</code> returns resources tagged with key1=value1</p> </li> <li> <p> <code>GetResources( {filter2} )</code> returns resources tagged with key2=value2 or key2=value3 or key2=value4</p> </li> <li> <p> <code>GetResources( {filter3} )</code> returns resources tagged with any tag containing key3 as its tag key, irrespective of its value</p> </li> <li> <p> <code>GetResources( {filter1,filter2,filter3} )</code> returns resources tagged with ( key1=value1) and ( key2=value2 or key2=value3 or key2=value4) and (key3, irrespective of the value)</p> </li> </ul> </li> </ul>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'GetTagValuesInput$Key' => '<p>The key for which you want to list all existing values in the specified Region for the AWS account.</p>', 'Tag$Key' => '<p>One part of a key-value pair that make up a tag. A key is a general label that acts like a category for more specific tag values.</p>', 'TagFilter$Key' => '<p>One part of a key-value pair that make up a tag. A key is a general label that acts like a category for more specific tag values.</p>', 'TagKeyFilterList$member' => NULL, 'TagKeyList$member' => NULL, 'TagKeyListForUntag$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeyFilterList' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$TagKeyFilters' => '<p>A list of tag keys to limit the output by. If you use this parameter, the count of returned noncompliant resources includes only resources that have the specified tag keys.</p>', ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'ComplianceDetails$MissingKeys' => '<p>A tag key that is required by the effective tag policy is missing.</p>', 'ComplianceDetails$InvalidKeys' => '<p>The tag key is noncompliant with the effective tag policy.</p>', 'ComplianceDetails$InvalidValues' => '<p>The tag value is noncompliant with the effective tag policy.</p>', 'GetTagKeysOutput$TagKeys' => '<p>A list of all tag keys in the AWS account.</p>', ], ], 'TagKeyListForUntag' => [ 'base' => NULL, 'refs' => [ 'UntagResourcesInput$TagKeys' => '<p>A list of the tag keys that you want to remove from the specified resources.</p>', ], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'ResourceTagMapping$Tags' => '<p>The tags that have been applied to one or more AWS resources.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'TagResourcesInput$Tags' => '<p>The tags that you want to add to the specified resources. A tag consists of a key and a value that you define.</p>', ], ], 'TagResourcesInput' => [ 'base' => NULL, 'refs' => [], ], 'TagResourcesOutput' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tag$Value' => '<p>The optional part of a key-value pair that make up a tag. A value acts as a descriptor within a tag category (key).</p>', 'TagMap$value' => NULL, 'TagValueList$member' => NULL, 'TagValuesOutputList$member' => NULL, ], ], 'TagValueList' => [ 'base' => NULL, 'refs' => [ 'TagFilter$Values' => '<p>The optional part of a key-value pair that make up a tag. A value acts as a descriptor within a tag category (key).</p>', ], ], 'TagValuesOutputList' => [ 'base' => NULL, 'refs' => [ 'GetTagValuesOutput$TagValues' => '<p>A list of all tag values for the specified key in the AWS account.</p>', ], ], 'TagsPerPage' => [ 'base' => NULL, 'refs' => [ 'GetResourcesInput$TagsPerPage' => '<p>A limit that restricts the number of tags (key and value pairs) returned by GetResources in paginated output. A resource with no tags is counted as having one tag (one key and value pair).</p> <p> <code>GetResources</code> does not split a resource and its associated tags across pages. If the specified <code>TagsPerPage</code> would cause such a break, a <code>PaginationToken</code> is returned in place of the affected resource and its tags. Use that token in another request to get the remaining data. For example, if you specify a <code>TagsPerPage</code> of <code>100</code> and the account has 22 resources with 10 tags each (meaning that each resource has 10 key and value pairs), the output will consist of 3 pages, with the first page displaying the first 10 resources, each with its 10 tags, the second page displaying the next 10 resources each with its 10 tags, and the third page displaying the remaining 2 resources, each with its 10 tags.</p> <p>You can set <code>TagsPerPage</code> to a minimum of 100 items and the maximum of 500 items.</p>', ], ], 'TargetId' => [ 'base' => NULL, 'refs' => [ 'DeleteTagPolicyInput$TargetId' => '<p>The account ID or the root identifier of the organization. If you don\'t know the root ID, you can call the AWS Organizations <a href="http://docs.aws.amazon.com/organizations/latest/APIReference/API_ListRoots.html">ListRoots</a> API to find it. </p>', 'GetEffectiveTagPolicyInput$TargetId' => '<p>The unique identifier of the organization root or account whose tag policy you want returned. </p>', 'GetTagPolicyInput$TargetId' => '<p>The account ID or the root identifier of the organization. If you don\'t know the root ID, you can call the AWS Organizations <a href="http://docs.aws.amazon.com/organizations/latest/APIReference/API_ListRoots.html">ListRoots</a> API to find it. </p>', 'PutTagPolicyInput$TargetId' => '<p>The account ID or the root identifier of the organization. If you don\'t know the root ID, you can call the AWS Organizations <a href="http://docs.aws.amazon.com/organizations/latest/APIReference/API_ListRoots.html">ListRoots</a> API to find it. </p>', 'Summary$TargetId' => '<p>The account identifier or the root identifier of the organization. If you don\'t know the root ID, you can call the AWS Organizations <a href="http://docs.aws.amazon.com/organizations/latest/APIReference/API_ListRoots.html">ListRoots</a> API.</p>', 'TargetIdFilterList$member' => NULL, ], ], 'TargetIdFilterList' => [ 'base' => NULL, 'refs' => [ 'GetComplianceSummaryInput$TargetIdFilters' => '<p>The target identifiers (usually, specific account IDs) to limit the output by. If you use this parameter, the count of returned noncompliant resources includes only resources in the specified target IDs.</p>', ], ], 'ThrottledException' => [ 'base' => '<p>The request was denied to limit the frequency of submitted requests.</p>', 'refs' => [], ], 'UntagResourcesInput' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourcesOutput' => [ 'base' => NULL, 'refs' => [], ], ],];
