// Making Bank Data// 
const Banklist = document.querySelector('#banklist');
const Bkashlist = document.querySelector('#bkashlist');

// render data
var Serial = 1;
var Serial2 = 1;

function renderdata(element) {

    if (element.data().transectionType == 'bank') {

        if (element.data().requestStatus == 'pending') {
            let li = document.createElement('tr');
            let SLL = document.createElement('td');
            SLL.style.width = '60px';
            let Name = document.createElement('td');
            let FatherName = document.createElement('td');
            let Phone = document.createElement('td');
            let DateOfBirth = document.createElement('td');
            let Address = document.createElement('td');
            let HousingSavingNo = document.createElement('td');
            let Acc_h_name = document.createElement('td');
            let Acc_num = document.createElement('td');
            let BankName = document.createElement('td');
            let BranchName = document.createElement('td');
            let Chequecol = document.createElement('td');
            let cheque = document.createElement('a');
            // let div = document.createElement('div');
            //let chequeFrame = document.createElement('img');
            cheque.classList.add('Nid');
            //div.classList.add('box');
            // chequeFrame.style.width = '250px';
            // chequeFrame.style.height = '200px';
            // chequeFrame.src = element.data().requisitionChequePhotoUrl;
            cheque.href = element.data().requisitionChequePhotoUrl;
            let Status = document.createElement('td');
            let rdiv = document.createElement('div');
            let accept = document.createElement('Button');
            accept.id = element.id;
            var s = 'accept';
            accept.onclick = function() {

                var qurary = '?id=' + accept.id + '&status=' + s;
                window.location = 'decision.php' + qurary;

            }
            rdiv.classList.add('buttonbox');
            accept.innerHTML = 'Accept';
            accept.style.borderRadius = '20px';
            let reject = document.createElement('Button');
            reject.innerHTML = 'Reject';
            reject.style.margin = '5px';
            reject.style.borderRadius = '20px';
            reject.id = element.id;
            var s = 'reject';
            reject.onclick = function() {

                var qurary = '?id=' + reject.id + '&status=' + s;
                window.location = 'decision.php' + qurary;

            }

            li.setAttribute('row-id', element.id);
            SLL.textContent = Serial;

            Name.textContent = element.data().name;
            FatherName.textContent = element.data().fatherName;
            Phone.textContent = element.data().phone;
            DateOfBirth.textContent = element.data().dateOfBirth;
            Address.textContent = element.data().address;
            HousingSavingNo.textContent = element.data().housingnumber;
            Acc_h_name.textContent = element.data().accountHolderName;
            Acc_num.textContent = element.data().accountNumber;
            BankName.textContent = element.data().nameOftheBank;
            BranchName.textContent = element.data().branceName;
            cheque.textContent = element.data().requisitionChequePhotoUrl;
            li.appendChild(SLL);

            li.appendChild(Name);
            li.appendChild(FatherName);
            li.appendChild(Phone);
            li.appendChild(DateOfBirth);
            li.appendChild(Address);
            li.appendChild(HousingSavingNo);
            li.appendChild(Acc_h_name);
            li.appendChild(Acc_num);
            li.appendChild(BankName);
            li.appendChild(BranchName);
            //////////////////// front/////////
            Chequecol.appendChild(cheque);
            // Chequecol.appendChild(div);
            //  div.appendChild(chequeFrame);
            li.appendChild(Chequecol);
            //////////////////////back

            Status.appendChild(rdiv);
            rdiv.appendChild(accept);
            rdiv.appendChild(reject);
            li.appendChild(Status);
            Banklist.appendChild(li);
            Serial++;
        }
    }
    //////            bkash
    else if (element.data().transectionType == 'bkash') {
        if (element.data().requestStatus == 'pending') {

            let li = document.createElement('tr');
            let SLL = document.createElement('td');
            SLL.style.width = '60px';
            let Name = document.createElement('td');
            let FatherName = document.createElement('td');
            let Phone = document.createElement('td');
            let DateOfBirth = document.createElement('td');
            let Address = document.createElement('td');
            let HousingSavingNo = document.createElement('td');
            let bkashNo = document.createElement('td');
            let Chequecol = document.createElement('td');
            let cheque = document.createElement('a');
            //  let div = document.createElement('div');
            //  let chequeFrame = document.createElement('img');
            cheque.classList.add('Nid');
            //  div.classList.add('box');
            //  chequeFrame.style.width = '250px';
            //  chequeFrame.style.height = '200px';
            //  chequeFrame.src = element.data().requisitionChequePhotoUrl;
            cheque.href = element.data().requisitionChequePhotoUrl;
            let Status = document.createElement('td');
            let rdiv = document.createElement('div');
            let accept = document.createElement('Button');
            rdiv.classList.add('buttonbox');
            accept.innerHTML = 'Accept';
            accept.id = element.id;
            var s = 'accept';
            accept.onclick = function() {

                var qurary = '?id=' + accept.id + '&status=' + s;
                window.location = 'decision.php' + qurary;

            }
            accept.style.borderRadius = '20px';
            let reject = document.createElement('Button');
            reject.innerHTML = 'Reject';
            reject.id = element.id;
            var s = 'reject';
            reject.onclick = function() {

                var qurary = '?id=' + reject.id + '&status=' + s;
                window.location = 'decision.php' + qurary;

            }

            reject.style.margin = '5px';
            reject.style.borderRadius = '20px';


            li.setAttribute('row-id', element.id);
            Name.textContent = element.data().name;
            FatherName.textContent = element.data().fatherName;
            Phone.textContent = element.data().phone;
            DateOfBirth.textContent = element.data().dateOfBirth;
            Address.textContent = element.data().address;
            HousingSavingNo.textContent = element.data().housingnumber;
            bkashNo.textContent = element.data().bkashNumber;
            cheque.textContent = element.data().requisitionChequePhotoUrl;
            SLL.textContent = Serial2;
            li.appendChild(SLL);
            li.appendChild(Name);
            li.appendChild(FatherName);
            li.appendChild(Phone);
            li.appendChild(DateOfBirth);
            li.appendChild(Address);
            li.appendChild(HousingSavingNo);
            li.appendChild(bkashNo);
            ///////////////// front/////////
            Chequecol.appendChild(cheque);
            // Chequecol.appendChild(div);
            //   div.appendChild(chequeFrame);
            li.appendChild(Chequecol);
            //////////////////////back

            Status.appendChild(rdiv);
            rdiv.appendChild(accept);
            rdiv.appendChild(reject);
            li.appendChild(Status);
            Bkashlist.appendChild(li);
            Serial2++;
        }
    }
}
// end bank data render


db.collection('requisition').get().then((snapshot) => {
    console.log(snapshot.docs);
    snapshot.docs.forEach(element => {
        console.log(element.data())
        renderdata(element);
    });
})