<form method="post">
    <div class="questionsContainer" id="multiChoiseDiv">
        <h1><?=trans('multi_choice_questions');?></h1>
        <div class="questionListDiv">
            <h2><?=trans('questions_list');?></h2>


            <div class="innerQuestionsList">
                <div class="oneQuestionRow">
                    <div class="questionHeader">

                        <p><input name="multiQInput[1][0]" value="this is the question"></p>
                    </div>
                    <div class="questionActions">
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="questionDetails">
                        <div class="oneAnswerDiv">
                            <input name="multiQInput[1][1]" value="this is first answer">
                            <input type="radio" name="multiQRadio[1][1]" value="1" checked>
                        </div>
                        <div class="oneAnswerDiv">
                            <input name="multiQInput[1][2]" value="this is first answer">
                            <input type="radio" name="multiQRadio[1][2]" value="1" >
                        </div>
                    </div>
                </div>
            </div>




            <div class="addQuestionDiv">
                <label ><?=trans('write_your_question');?></label>
                <div class="inputDiv"><input type="text" id="multiQQInput" name="multiQQInput"placeholder="<?=trans('write_your_question');?>" ></div>
       <div class="addOneChoiceAllDiv">
           <div class="inputDiv">
               <input name="choiceInput" id="choiceInput" placeholder="<?=trans('answer_here');?>">
           </div>
           <div class="answerActionsDiv">
               <input type="checkbox" id="trueAnswerCheckbox" name="trueAnswerCheckbox" value="1" >
           </div>
       </div>
            </div>


        </div>

    </div>


    <button type="submit" name="insertQuestionsButton" ><?=trans('insert_questions');?></button>
</form>