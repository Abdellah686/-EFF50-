import { useState } from "react"
import './css.css'
export function Form() {
    const [formData, setFormData] = useState({
        username: '',
        email: '',
        password:'',
        passConf:'',
        occupation: '',
        gendre: '',
        languages: []
    })
    const [formError, setFormError] = useState({})
    function handleInput(e) {

        if (e.target.name === 'languages') {
            let copy = { ...formData }
            if (e.target.checked) {
                copy.languages.push(e.target.value)
            } else {
                copy.languages = copy.languages.filter(el => el !== e.target.value)
            }
            setFormData(copy)

        } else {
            setFormData(() => ({ ...formData, [e.target.name]: e.target.value }))
        }
    }
    function valideForm() {
        let err = {}
        if (formData.username === '') {
            err.username = ' username Requierd'
        }if (formData.email === '') {
            err.email = 'email Requierd'
        }else{
            let rgx=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            if(!rgx.test(formData.email)){
                err.email = 'email Not Valid'
            }
        }
        
        if (formData.gendre === '') {
            err.gendre = 'gendre Requierd'
        }if (formData.languages.length < 1) {
            err.languages = 'any languages Requierd'
        }
        if (formData.occupation === '') {
            err.occupation = 'occupation Requierd'
        }
        // if(formData.password===''||formData.passConf===''){
        //     err.password='Pass required'
        // }else
        setFormError({ ...err })
        return Object.keys(err).length < 1;
    }
    function handleSubmit(e) {
        e.preventDefault();
        console.log('formData', formData);
        let isValid = valideForm()
        console.log(isValid)
        if(isValid){
            alert('submitted')
        }
    }
    return (
        <>
            <form onSubmit={handleSubmit}>
                <input type="text" placeholder="username" name="username" value={formData.username} onChange={handleInput} /> <br />
                <span className="red">{formError.username}</span> <br />
                <input type="text" placeholder="email" name="email" value={formData.email} onChange={handleInput} /><br />
                <span className="red">{formError.email}</span> <br />
                <input type="text" placeholder="password" name="password" value={formData.password} onChange={handleInput} /><br />
                <span className="red">{formError.password}</span> <br />
                <input type="text" placeholder="password" name="passConf" value={formData.passConf} onChange={handleInput} /><br />
                <span className="red">{formError.passConf}</span> <br />
                <select name="occupation" placeholder="occupation" value={formData.occupation} onChange={handleInput}>
                    <option value="choose">chose</option>
                    <option value="mecanic">mecanic</option>
                    <option value="student">student</option>
                    <option value="lawyer">lawyer</option>
                </select><br />
                <span className="red">{formError.occupation}</span> <br />
                <div className="form-group">
                    <label> gendre <br />
                        <input type="radio" name="gendre" value="male" onChange={handleInput} /><label htmlFor="male">male</label>
                        <input type="radio" name="gendre" value="female" onChange={handleInput} /><label htmlFor="female">female</label>
                    </label>
                </div>
                <br />
                <span className="red">{formError.gendre}</span> <br />

                <div className="form-group" onChange={handleInput}>
                    <label> languages <br />
                        <input type="checkbox" name="languages" value="html" /><label htmlFor="html">html</label><br />
                        <input type="checkbox" name="languages" value="css" /><label htmlFor="css">css</label><br />
                        <input type="checkbox" name="languages" value="javasript" /><label htmlFor="javasript">javasript</label>
                    </label>
                </div>
                <br />                <span className="red">{formError.languages}</span> <br />

                <button type="submit">Send</button>
            </form>
        </>
    )
}