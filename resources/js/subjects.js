import axios from 'axios'; 

let courseInput = document.querySelector('#course');
let schoolYear1Select = document.querySelector('#school_year1');
let sem1Select = document.querySelector('#sem1');
let thead1 = document.querySelector('#thead1');


schoolYear1Select.addEventListener('change', getSubjects1);
sem1Select.addEventListener('change', getSubjects1);


getSubjects1();

function getSubjects1() {
    axios.get('/courses/getCourse', {
        params: {
            course_name: courseInput.value,
            sem: sem1Select.value,
            school_year: schoolYear1Select.value
        }
    }).then(response => {
        console.log(response);
        let subjects = response.data;
        let contents = `<tr>
            <th> </th>
            <th class="border-r border-black-100"> S U B J E C T S </th> 
            <th class="border-r border-black-100"> </th>
            <th class="border-r border-black-100"> </th>
            <th> </th>
        </tr>

        <tr>
            <th class="border-t border-b border-l text-center border-black-100 px-8"> CODE </th>
            <th class="border-t border-b border-r text-center border-black-100 px-12"> DESCRIPTIVE TITLE </th>
            <th class="border-b border-r text-center border-black-100 px-8"> CREDITS </th>
            <th class="border-b border-r text-center border-black-100 px-8"> GRADES </th>
            <th class="border-b  text-center border-black-100 px-8"> REMARKS </th>
        </tr>`;

        subjects.forEach((subject, index) => {
            contents += `<tr>
    
            <td class="px-4 border-black-100 text-center">
                <span></span> </br>
                <input type="text" name="code1[]" value="${subject.code}" size="5">
            </td>
            <td class="px-6 border-r border-black-100 text-center"> 
                <span></span> </br>
                <input type="text" name="subject1[]" value="${subject.subject_name}" size="40" id="subjectDescription">
            </td>
            <td class="px-4 border-black-100 text-center">
                <span></span> </br>
                <input type="text" name="credits1[]" value="${subject.units}" size="5">
            </td>
            <td class="px-8 border-r border-black-100 text-center">
                <span></span> </br>
                <select name="grades1[]" class="subjectGrade1" >
                    <option value="0" selected disabled> -- </option>
                    <option value="1.00" >1.00</option>
                    <option value="1.25" >1.25</option>
                    <option value="1.50" >1.50</option>
                    <option value="1.75" >1.75</option>
                    <option value="2.00" >2.00</option>
                    <option value="2.25" >2.25</option>
                    <option value="2.50" >2.50</option>
                    <option value="2.75" >2.75</option>
                    <option value="3.00" >3.00</option>
                    <option value="5.00" >5.00</option>
                    <option value="NG" >  -- </option>
                    <option value="INC" >INC</option>
                    <option value="DP" >DP</option>
                    <option value="UW" >UW</option>
                    <option value="AW" >AW</option>
                </select>
            </td>
            <td class="px-8 border-black-100 text-center">
                <span></span> </br>
                <input type="text" name="remarks1[]" id="subjectRemark" size="5">
            </td>
        </tr>`;
        });
        thead1.innerHTML = contents;

        let subjectGrades = Array.from(document.querySelectorAll('.subjectGrade1'));
        subjectGrades.forEach(subjectGrade => {
            subjectGrade.addEventListener('change', (event) => {
                let remarkInput = event.target.parentElement.parentElement.children[4].children[2];
                if (event.target.value.includes('.')) {
                    if (parseFloat(event.target.value) <= 3.00) {
                        remarkInput.value = 'Passed';
                    } else {
                        remarkInput.value = 'Failed';
                    }
                } else {
                    remarkInput.value = event.target.value;
                }
            });
        });
    }).catch(error => {
        console.log(error);
    });
}


//-----------------------------------

let schoolYear2Select = document.querySelector('#school_year2');
let sem2Select = document.querySelector('#sem2');
let thead2 = document.querySelector('#thead2');


schoolYear2Select.addEventListener('change', getSubjects2);
sem2Select.addEventListener('change', getSubjects2);


getSubjects2();

function getSubjects2() {
    axios.get('/courses/getCourse', {
        params: {
            course_name: courseInput.value,
            sem: sem2Select.value,
            school_year: schoolYear2Select.value
        }
    }).then(response => {
        console.log(response);
        let subjects = response.data;
        let contents = `<tr>
            <th> </th>
            <th class="border-r border-black-100"> S U B J E C T S </th> 
            <th class="border-r border-black-100"> </th>
            <th class="border-r border-black-100"> </th>
            <th> </th>
        </tr>

        <tr>
            <th class="border-t border-b border-l text-center border-black-100 px-8"> CODE </th>
            <th class="border-t border-b border-r text-center border-black-100 px-12"> DESCRIPTIVE TITLE </th>
            <th class="border-b border-r text-center border-black-100 px-8"> CREDITS </th>
            <th class="border-b border-r text-center border-black-100 px-8"> GRADES </th>
            <th class="border-b  text-center border-black-100 px-8"> REMARKS </th>
        </tr>`;

        subjects.forEach((subject, index) => {
            contents += `<tr>
    
            <td class="px-4 border-black-100 text-center">
                <span></span> </br>
                <input type="text" name="code2[]" value="${subject.code}" size="5">
            </td>
            <td class="px-6 border-r border-black-100 text-center"> 
                <span></span> </br>
                <input type="text" name="subject2[]" value="${subject.subject_name}" size="40" id="subjectDescription">
            </td>
            <td class="px-4 border-black-100 text-center">
                <span></span> </br>
                <input type="text" name="credits2[]" value="${subject.units}" size="5">
            </td>
            <td class="px-8 border-r border-black-100 text-center">
                <span></span> </br>
                <select name="grades2[]" class="subjectGrade2" >
                    <option value="0" selected disabled> -- </option>
                    <option value="1.00" >1.00</option>
                    <option value="1.25" >1.25</option>
                    <option value="1.50" >1.50</option>
                    <option value="1.75" >1.75</option>
                    <option value="2.00" >2.00</option>
                    <option value="2.25" >2.25</option>
                    <option value="2.50" >2.50</option>
                    <option value="2.75" >2.75</option>
                    <option value="3.00" >3.00</option>
                    <option value="5.00" >5.00</option>
                    <option value="NG" >  -- </option>
                    <option value="INC" >INC</option>
                    <option value="DP" >DP</option>
                    <option value="UW" >UW</option>
                    <option value="AW" >AW</option>
                </select>
            </td>
            <td class="px-8 border-black-100 text-center">
                <span></span> </br>
                <input type="text" name="remarks2[]" id="subjectRemark" size="5">
            </td>
        </tr>`;
        });
        thead2.innerHTML = contents;

        let subjectGrades = Array.from(document.querySelectorAll('.subjectGrade2'));
        subjectGrades.forEach(subjectGrade => {
            subjectGrade.addEventListener('change', (event) => {
                let remarkInput = event.target.parentElement.parentElement.children[4].children[2];
                if (event.target.value.includes('.')) {
                    if (parseFloat(event.target.value) <= 3.00) {
                        remarkInput.value = 'Passed';
                    } else {
                        remarkInput.value = 'Failed';
                    }
                } else {
                    remarkInput.value = event.target.value;
                }
            });
        });
    }).catch(error => {
        console.log(error);
    });
}