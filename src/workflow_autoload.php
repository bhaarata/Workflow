<?php
/**
 * Autoload map for Workflow package.
 *
 * @package Workflow
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @filesource
 */

return array( 'ezcWorkflowConditionAnd' => 'Workflow/conditions/and.php',
              'ezcWorkflowConditionIsAnything' => 'Workflow/conditions/is_anything.php',
              'ezcWorkflowConditionIsArray' => 'Workflow/conditions/is_array.php',
              'ezcWorkflowConditionIsBool' => 'Workflow/conditions/is_bool.php',
              'ezcWorkflowConditionIsEqual' => 'Workflow/conditions/is_equal.php',
              'ezcWorkflowConditionIsEqualOrGreaterThan' => 'Workflow/conditions/is_equal_or_greater_than.php',
              'ezcWorkflowConditionIsEqualOrLessThan' => 'Workflow/conditions/is_equal_or_less_than.php',
              'ezcWorkflowConditionIsFalse' => 'Workflow/conditions/is_false.php',
              'ezcWorkflowConditionIsFloat' => 'Workflow/conditions/is_float.php',
              'ezcWorkflowConditionIsGreaterThan' => 'Workflow/conditions/is_greater_than.php',
              'ezcWorkflowConditionIsInteger' => 'Workflow/conditions/is_integer.php',
              'ezcWorkflowConditionIsLessThan' => 'Workflow/conditions/is_less_than.php',
              'ezcWorkflowConditionIsNotEqual' => 'Workflow/conditions/is_not_equal.php',
              'ezcWorkflowConditionIsObject' => 'Workflow/conditions/is_object.php',
              'ezcWorkflowConditionIsString' => 'Workflow/conditions/is_string.php',
              'ezcWorkflowConditionIsTrue' => 'Workflow/conditions/is_true.php',
              'ezcWorkflowConditionNot' => 'Workflow/conditions/not.php',
              'ezcWorkflowConditionOr' => 'Workflow/conditions/or.php',
              'ezcWorkflowConditionVariable' => 'Workflow/conditions/variable.php',
              'ezcWorkflowConditionXor' => 'Workflow/conditions/xor.php',

              'ezcWorkflowDefinitionXml' => 'Workflow/definitions/xml.php',

              'ezcWorkflowException' => 'Workflow/exceptions/exception.php',
              'ezcWorkflowDefinitionException' => 'Workflow/exceptions/definition.php',
              'ezcWorkflowExecutionException' => 'Workflow/exceptions/execution.php',
              'ezcWorkflowInvalidDefinitionException' => 'Workflow/exceptions/invalid_definition.php',
              'ezcWorkflowInvalidInputException' => 'Workflow/exceptions/invalid_input.php',

              'ezcWorkflowExecutionNonInteractive' => 'Workflow/execution/non_interactive.php',

              'ezcWorkflowCondition' => 'Workflow/interfaces/condition.php',
              'ezcWorkflowConditionBooleanSet' => 'Workflow/interfaces/condition_boolean_set.php',
              'ezcWorkflowConditionComparison' => 'Workflow/interfaces/condition_comparison.php',
              'ezcWorkflowConditionType' => 'Workflow/interfaces/condition_type.php',
              'ezcWorkflowDefinition' => 'Workflow/interfaces/definition.php',
              'ezcWorkflowExecution' => 'Workflow/interfaces/execution.php',
              'ezcWorkflowExecutionListener' => 'Workflow/interfaces/execution_listener.php',
              'ezcWorkflowNode' => 'Workflow/interfaces/node.php',
              'ezcWorkflowNodeBranch' => 'Workflow/interfaces/node_branch.php',
              'ezcWorkflowNodeConditionalBranch' => 'Workflow/interfaces/node_conditional_branch.php',
              'ezcWorkflowNodeMerge' => 'Workflow/interfaces/node_merge.php',
              'ezcWorkflowNodeVariable' => 'Workflow/interfaces/node_variable.php',
              'ezcWorkflowServiceObject' => 'Workflow/interfaces/service_object.php',
              'ezcWorkflowRollbackableServiceObject' => 'Workflow/interfaces/rollbackable_service_object.php',
              'ezcWorkflowVariableHandler' => 'Workflow/interfaces/variable_handler.php',
              'ezcWorkflowVisitable' => 'Workflow/interfaces/visitable.php',
              'ezcWorkflowVisitor' => 'Workflow/interfaces/visitor.php',

              'ezcWorkflowNodeAction' => 'Workflow/nodes/action.php',
              'ezcWorkflowNodeParallelSplit' => 'Workflow/nodes/control_flow/parallel_split.php',
              'ezcWorkflowNodeExclusiveChoice' => 'Workflow/nodes/control_flow/exclusive_choice.php',
              'ezcWorkflowNodeMultiChoice' => 'Workflow/nodes/control_flow/multi_choice.php',
              'ezcWorkflowNodeDiscriminator' => 'Workflow/nodes/control_flow/discriminator.php',
              'ezcWorkflowNodeEnd' => 'Workflow/nodes/end.php',
              'ezcWorkflowNodeInput' => 'Workflow/nodes/variables/input.php',
              'ezcWorkflowNodeSimpleMerge' => 'Workflow/nodes/control_flow/simple_merge.php',
              'ezcWorkflowNodeStart' => 'Workflow/nodes/start.php',
              'ezcWorkflowNodeSubWorkflow' => 'Workflow/nodes/sub_workflow.php',
              'ezcWorkflowNodeSynchronization' => 'Workflow/nodes/control_flow/synchronization.php',
              'ezcWorkflowNodeSynchronizingMerge' => 'Workflow/nodes/control_flow/synchronizing_merge.php',
              'ezcWorkflowNodeVariableSet' => 'Workflow/nodes/variables/set.php',
              'ezcWorkflowNodeVariableUnset' => 'Workflow/nodes/variables/unset.php',
              'ezcWorkflowNodeVariableAdd' => 'Workflow/nodes/variables/add.php',
              'ezcWorkflowNodeVariableDiv' => 'Workflow/nodes/variables/div.php',
              'ezcWorkflowNodeVariableMul' => 'Workflow/nodes/variables/mul.php',
              'ezcWorkflowNodeVariableSub' => 'Workflow/nodes/variables/sub.php',
              'ezcWorkflowNodeVariableDecrement' => 'Workflow/nodes/variables/decrement.php',
              'ezcWorkflowNodeVariableIncrement' => 'Workflow/nodes/variables/increment.php',

              'ezcWorkflowVisitorDot' => 'Workflow/visitors/dot.php',

              'ezcWorkflowUtil' => 'Workflow/util.php',
              'ezcWorkflow' => 'Workflow/workflow.php'
            );
?>
