import React,{useState} from 'react';
import './App.css';
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
function App() {
  const [users, setUsers]=useState([]);
  const getuser=()=>{
    const time = setTimeout(async()=>{
      const response = await fetch('https://reqres.in/api/users?page=1');
      const jsonResponse= await response.json();
      setUsers(jsonResponse.data);
    },2000);
    return ()=> clearTimeout(time);
  }
  return (
    <>
       <div className="btn-success mt-3 p-2">  <button className='bg-warning btn' onClick={getuser}>Get Users</button> </div>
       <div className="container-fluid mt-5">
         <div className="row text-center">
    
     {users.map((user, id)=>{
       return(
         <div className="col-10 col-md-4 mt-5">
           <div className="card p-2 rounded"> 
           <div className="d-flex align-items-center">
           <div className='img'><img src={user.avatar} className='rounded' width="155" alt=""/></div>
           <h6 className="email"><span className='p-2'>Email:</span>{user.email}</h6>
           <p className='para'><span className='p-2'>Name:</span>{user.first_name}{user.last_name}</p>
           </div>
           </div>
            </div>
           )
       })}
       
       </div>
    </div>
    </>
  );
}

export default App;