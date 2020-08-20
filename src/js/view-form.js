var newWindow;
function makeNewWindow() {
    newWindow = window.open('', '', 'status, height=200, width=300')
}

function subWrite(outerString) {
    if (newWindow.closed) makeNewWindow()
    newWindow.focus()
    newWindow.document.write(outerString)
    newWindow.document.close()
}

$(document).ready(function() {

    $(':submit').click(function (e) {
        validate()
        var outerString = 'Ten: '
        outerString += $('#user-name').val() + '\n'
        outerString += 'Mat khau: ' + $('#password').val() + '\n'
        outerString += 'Dia chi: ' + $('#address').val() + '\n'
        outerString += 'Gioi tinh: ' + $('input[name="gender"]').val() + '\n'
        var marriage = 'Chua ket hon'
        if ($('#marriage').is(':checked')) marriage = 'Da ket hon'
        outerString += 'Tinh trang hon nhan: ' + marriage + '\n'
        outerString += 'Ky nang: ' + $('input[name="skill"]').val() + '\n'
        outerString += 'So thich: '
        $.each($('input[name="hobbies"]:checked'), function() {
            // hobbies.push($(this).val())
            outerString += $(this).val() + '    '
        })
        outerString += '\n' + 'Nghe nghiep: '
        $.each($('#jobs option:selected'), function() {
            outerString += $(this).val() + '    '
        })
        outerString += '\n'
        alert(outerString)
        subWrite(outerString)
        e.preventDefault()
    })

    function validate() {
        if ($('#user-name').val() === '') alert('Username cannot be null')
        if ($('#password').val() === '') alert('Password cannot be null')
        if ($('#retype-password') === '' || ($('#password').val() !== $('#retype-password').val())) alert('Password doesn\'t matches!')
        if ($('#address').val() === '') alert('Address cannot be null')
    }

    // Download File from Server to local file method
    function download(filename, text) {
        var pom = document.createElement('a');
        pom.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
        pom.setAttribute('download', filename);
    
        if (document.createEvent) {
            var event = document.createEvent('MouseEvents');
            event.initEvent('click', true, true);
            pom.dispatchEvent(event);
        }
        else {
            pom.click();
        }
    }
    
    $(':reset').click(function (e) {
        $('form').reset()
        e.preventDefault()
    })
})