import { useState } from "react"

export function Form() {
  const [formData, setFormData] = useState({
    username: '',
    email: '',
    occupation: '',
    gendre: '',
    languages: []
  })
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
  console.log(formData)
  return (
    <>
      <form >
        <input type="text" placeholder="username" name="username" value={formData.username} onChange={handleInput} /> <br />
        <input type="text" placeholder="email" name="email" value={formData.email} onChange={handleInput} /><br />
        <select name="occupation" placeholder="occupation" value={formData.occupation} onChange={handleInput}>
          <option value="choose">chose</option>
          <option value="mecanic">mecanic</option>
          <option value="student">student</option>
          <option value="lawyer">lawyer</option>
        </select><br />
        <div className="form-group">
          <label> gendre <br />
            <input type="radio" name="gendre" value="male" onChange={handleInput} /><label htmlFor="male">male</label>
            <input type="radio" name="gendre" value="female" onChange={handleInput} /><label htmlFor="female">female</label>
          </label>
        </div>
        <br />
        <div className="form-group" onChange={handleInput}>
          <label> languages <br />
            <input type="checkbox" name="languages" value="html" /><label htmlFor="html">html</label><br />
            <input type="checkbox" name="languages" value="css" /><label htmlFor="css">css</label><br />
            <input type="checkbox" name="languages" value="javasript" /><label htmlFor="javasript">javasript</label>
          </label>
        </div>
        <button type="button" onClick={handleInput}>Send</button>
      </form>
    </>
  )
}